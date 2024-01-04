@extends('layouts.layout1')
@section('container')
<!-- <h1>Heres the detail of the appointment</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Detail of the appointment</h1>
    </div>
</div>
@if($detailappointment)
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mx-2">{{ $detailappointment->appointment_id }}</h5>
                <p class="card-text text-success">{{ $detailappointment->appstatus->appstatus_name }}</p>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Date:</h4>
                <h4 class="card-text mx-4">{{ $detailappointment->employeeService->date_available }}</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Time:</h4>
                <h4 class="card-text mx-4">{{ $detailappointment->employeeService->time_available }}</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Employee: </h4>
                <h4 class="card-text mx-4">{{ $detailappointment->employeeService->employee->employee_name }}</h4>
            </div>    
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Service: </h4>
                <h4 class="card-text mx-4">{{ $detailappointment->employeeService->service->service_name }}</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Durasi: </h4>
                <h4 class="card-text mx-4">{{ $detailappointment->employeeService->service->service_duration }} menit</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Harga: </h4>
                <h4 class="card-text mx-4">Rp. {{ $detailappointment->employeeService->service->service_price }}</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h4 class="card-text mx-4">Payment Type: </h4>
                <h4 class="card-text mx-4">{{ $detailappointment->payment->payment_type_name }}</h4>
            </div>
        </div>
        <!-- <div class="card-footer">
            <small class="text-body-secondary">{{ $detailappointment->employeeService->date_available }}</small>
            <small class="text-body-secondary">{{ $detailappointment->employeeService->service->service_name }}</small>
            <small class="text-body-secondary">{{ $detailappointment->payment->payment_type_name }}</small>
        </div> -->
    </div>
    <br>
@else
<p>Detail none</p>
@endif



@endsection