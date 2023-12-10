@extends('layouts.layout1')
@section('container')
<h1>Heres the detail of the appointment</h1>
@if($detailappointment)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $detailappointment->appointment_id }}</h5>
            <p class="card-text">{{ $detailappointment->appstatus->appstatus_name }}</p>
            <p class="card-text">{{ $detailappointment->employeeService->employee->employee_name }}</p>
            <p class="card-text">HARGA</p>
            <p class="card-text">{{ $detailappointment->employeeService->service->service_price }}</p>
            <p class="card-text">DURASI</p>
            <p class="card-text">{{ $detailappointment->employeeService->service->service_duration }}</p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">{{ $detailappointment->employeeService->date_available }}</small>
            <small class="text-body-secondary">{{ $detailappointment->employeeService->service->service_name }}</small>
            <small class="text-body-secondary">{{ $detailappointment->payment->payment_type_name }}</small>
        </div>
    </div>
    <br>
@else
<p>Detail none</p>
@endif



@endsection