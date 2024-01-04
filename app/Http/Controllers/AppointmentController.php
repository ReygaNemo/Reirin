<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\EmployeeService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function showAllAppointment(Request $request)
    {
        $user = Auth::user();
        if($user){
            $appointments = Appointment::where('customer_id', $user->customer_id)->get();
            return view('myappointment', array_merge(compact('appointments'), ["title" => "myappointment"]));
        }
        $appointments = null;
        return view('myappointment', array_merge(compact('appointments'), ["title" => "myappointment"]));
    }
    public function appointmentSelected(Request $request)
    {
        $appointmentId = $request->input('appointment_id');
        // Store the selected service ID in the session
        $request->session()->put('appointment_id', $appointmentId);

        // Add any additional logic here if needed

        return redirect()->route('myappointmentdetail');
    }
    public function showSelectedAppointment(Request $request)
    {
        // Retrieve the selected service ID from the session
        $selectedAppointmentId = $request->session()->get('appointment_id');

        // Fetch the selected service from the database (assuming you have a Service model)

        $selectedApp = Appointment::where('appointment_id', $selectedAppointmentId)->first();

        // Pass the selected service to the view
        return view('myappointmentdetail', [
            'detailappointment' => $selectedApp,
            'title' => 'myappointmentdetail',
        ]);
    }

    public function checkEmployee(Request $request)
    {
        $chosenDate = $request->input('chosenDate');
        $selectedServiceId = $request->session()->get('selected_service');
        $selectedService = Service::where('service_id', $selectedServiceId)->first();
        // $formattedDate = Carbon::createFromFormat('m/d/Y h:i A', $chosenDate)->format('Y-m-d');
        $emp = EmployeeService::where('date_available', $chosenDate)->where('is_available', true)->where('service_id', $selectedServiceId)->get();
        $request->session()->put('selected_date', $chosenDate);
        return view('appointment1', [
            'selectedService' => $selectedService,
            'employee' => $emp,
            'title' => 'employees',
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
