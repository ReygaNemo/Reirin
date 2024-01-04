<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Employee;
use App\Models\EmployeeService;
use App\Models\PaymentType;
use App\Models\Service;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function showAllPayment(Request $request)
    {
        //Show all payment type
        $allPayment = PaymentType::all();

        //show the service selected
        $selectedServiceId = $request->session()->get('selected_service');
        $selectedService = Service::where('service_id', $selectedServiceId)->first();

        //show the employee selected
        $selectedEmployeeServiceId = $request->input('employeeService');
        $selectedEmployeeService = EmployeeService::where('employee_service_id', $selectedEmployeeServiceId)->first();
        $request->session()->put('employee_service', $selectedEmployeeService);

        $selectedEmployeeId = $selectedEmployeeService->employee_id;
        $request->session()->put('selected_employee', $selectedEmployeeId);

        $selectedEmployee = Employee::where('employee_id', $selectedEmployeeId)->first();

        //show the tanggal selected
        $selectedDate = $request->session()->get('selected_date');
        // Parse the chosenDate using Carbon
        // $carbonDate = Carbon::createFromFormat('m/d/Y', $selectedDate);
        // Extract date and time components
        // $date = $carbonDate->toDateString(); // YYYY-MM-DD
        $date = $selectedDate;
        $time = $selectedEmployeeService->time_available;
        // $time = $carbonDate->format('h:i A');


        $request->session()->put('employee', $selectedEmployee);
        $request->session()->put('service', $selectedService);
        $request->session()->put('date', $selectedDate);
        $request->session()->put('dateFormat', $date);
        $request->session()->put('timeFormat', $time);

        //add to database
        // Create a collection to hold the data
        $allData = new Collection();

        // Add items to the collection
        $allData->push([
            'service' => $selectedService,
            'employee' => $selectedEmployee,
            'payment_types' => $allPayment,
            'date' => $date,
            'time' => $time,
        ]);
        $request->session()->put('keyData', $allData);
        $title = 'kucing';
        // Pass the collection to the view
        return view('payment', [
            'allData' => $allData,
            'title' => $title,
        ]);
    }
    public function generateNextAppointmentID()
    {
        // Get the latest appointment ID
        $latestAppointment = Appointment::latest('appointment_id')->first();

        // Extract the numeric part from the ID and increment it
        $numericPart = intval(substr($latestAppointment->appointment_id, 1)) + 1;

        // Format the next ID with the desired pattern (e.g., A001)
        $nextAppointmentID = 'A' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        return $nextAppointmentID;
    }

    public function finalizedPayment(Request $request)
    {

        $selectedPaymentId = $request->input('paymentId');
        $employee = $request->session()->get('employee');
        $service = $request->session()->get('service');
        $date = $request->session()->get('date');
        $dateFormat = $request->session()->get('dateFormat');
        $timeFormat = $request->session()->get('timeFormat');
        $employeeService = $request->session()->get('employee_service');
        $user = Auth::user();


        $record = EmployeeService::where('employee_id', $employee->employee_id)->where('service_id', $service->service_id)->whereDate('date_available', $dateFormat)->first();
        $payment = PaymentType::where('payment_type_id', $selectedPaymentId)->first();
        $appid = $this->generateNextAppointmentID();

        Appointment::create([
            'appointment_id' => $appid,
            'employee_service_id' => $employeeService->employee_service_id,
            'customer_id' => $user->customer_id,
            'payment_type_id' => $payment->payment_type_id,
            'appstatus_id' => 1,
        ]);
        $employeeService::where('employee_service_id', $employeeService->employee_service_id)->update([
            'is_available' => 0,
            // Add more fields as needed
        ]);

        // $record = EmployeeService::where('employee_service_id', $employeeService->employee_service_id)->first();
        // $record->is_available = 0;
        // $record->save();

        $authData = Auth::user();
        // Clear all session data
        $request->session()->flush();
        Auth::login($authData);
        $title = 'thanks'; // Replace 'Your Title' with the actual title value you want to pass

        return view('thankyou', compact('title'));
    }
}
