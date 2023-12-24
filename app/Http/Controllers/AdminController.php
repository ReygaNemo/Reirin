<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\EmployeeService;
use App\Models\Appointment;
use App\Models\Service;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function showAllCustomerAppointment()
    {
        $appointments = Appointment::all();
        return view('adminappointment', array_merge(compact('appointments'), ["title" => "myappointment"]));
    }
    public function employeeServicePage()
    {
        $now = Carbon::now();
        $empservices = EmployeeService::where('date_available', '>=', $now)->where('is_available', 1)->get();
        $emps = Employee::all();
        $services = Service::all();
        return view('adminaddservice', array_merge(compact('empservices', 'emps', 'services'), ["title" => "myappointment"]));

        // Your logic to display all appointments
    }
    public function generateNextEmpServiceId()
    {
        // Get the latest appointment ID
        $latestEmpService = EmployeeService::latest('employee_service_id')->first();

        // Extract the numeric part from the ID and increment it
        $numericPart = intval(substr($latestEmpService->employee_service_id, 2)) + 1;

        // Format the next ID with the desired pattern (e.g., A001)
        $nextEmpServiceId = 'ES' . str_pad($numericPart, 2, '0', STR_PAD_LEFT);

        return $nextEmpServiceId;
    }
    public function addShift(Request $request)
    {
        $employeeId = $request->input('employee_id');
        $empserid = $this->generateNextEmpServiceId();
        $serviceId = $request->input('service_id');
        $date = $request->input('date');
        $shift = $request->input('shift');
        EmployeeService::create([
            'employee_service_id' => $empserid,
            'employee_id' => $employeeId,
            'service_id' => $serviceId,
            'time_available' => $shift,
            'date_available' => $date,
            'is_available' => 1,
        ]);
        return $this->employeeServicePage();
        // Your logic to display all appointments
    }
    public function changeAppStatus(Request $request)
    {
        $selectedApp = $request->input('appointmentId');
        $appointment = Appointment::where('appointment_id', $selectedApp)->first();
        //Appointment::where('appointment_id', $selectedApp)->update(['appstatus_id' => 2]);
        if($appointment->appstatus_id += 1 >= 5){
            $appointment->appstatus_id += 1;
            $appointment->save();
        }

        $appointments = Appointment::all();
        return view('adminappointment', array_merge(compact('appointments'), ["title" => "myappointment"]));
        // Your logic to display all appointments
    }
}
