<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showServices()
    {
        $services = Service::all();
        return view('appointmentMain', array_merge(compact('services'), ["title" => "appointment"]));
    }
    public function findServiceById($id)
    {
        $service = Service::where('service_id', $id)->first();
        return $service;
    }

    public function serviceSelected(Request $request)
    {
        $serviceId = $request->input('service_id');
        // Store the selected service ID in the session
        $request->session()->put('selected_service', $serviceId);

        // Add any additional logic here if needed

        return redirect()->route('appointment1');
    }
    public function showSelectedService(Request $request)
    {
        // Retrieve the selected service ID from the session
        $selectedServiceId = $request->session()->get('selected_service');

        // Fetch the selected service from the database (assuming you have a Service model)

        $selectedService = Service::where('service_id', $selectedServiceId)->first();

        // Pass the selected service to the view
        return view('appointment1', [
            'selectedService' => $selectedService,
            'title' => 'Your Title Here',
            'employee' => null,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
