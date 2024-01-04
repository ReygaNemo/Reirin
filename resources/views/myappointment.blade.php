@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
{{-- User is authenticated --}}
<!-- <h1>Thankyou for choosing ReiRinSalon! heres all your appointment!</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">All your appointment</h1>
    <h4 class="fw-bold mb-5">Thankyou for choosing ReiRinSalon!</h4>
    </div>
</div>
@foreach($appointments as $myap)
<form action="{{ route('select-appointment') }}" method="post">
    @csrf
    <input type="hidden" name="appointment_id" value="{{ $myap->appointment_id }}">
    <div class="card border-dark">
        <div class="card-body">
            <!-- <div class="d-flex flex-row-reverse">
                <h4 class="card-title text-muted">{{ $myap->appointment_id }}</h4>
                <p class="card-text">{{ $myap->appstatus->appstatus_name }}</p>
            </div>
            <p class="card-text">{{ $myap->appstatus->appstatus_name }}</p> -->

            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title">{{ $myap->appointment_id }}</h5>
                <p class="card-text text-success">{{ $myap->appstatus->appstatus_name }}</p>
            </div>
            <!-- test -->
            <div>
                <div class="row">
                    <div class="col-sm-2">
                        <h4 class="mb-0">Service</h4>
                    </div>
                    <div class="col-sm-9">
                        <h4 class="text-muted mb-0">: {{ $myap->employeeService->service->service_name }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h4 class="mb-0">Date</h4>
                    </div>
                    <div class="col-sm-9">
                        <h4 class="text-muted mb-0">: {{ $myap->employeeService->date_available }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h4 class="mb-0">Time</h4>
                    </div>
                    <div class="col-sm-9">
                        <h4 class="text-muted mb-0">: {{ $myap->employeeService->time_available }}</h4>
                    </div>
                </div>
            </div>
            <!-- <h4 class="text-body-secondary">Service: {{ $myap->employeeService->service->service_name }}</h4>
            <h4 class="text-body-secondary">Date: {{ $myap->employeeService->date_available }}</h4>
            <h4 class="text-body-secondary">Payment Type: {{ $myap->payment->payment_type_name }}</h4> -->
        </div>
        <!-- <div class="card-footer">
            <small class="text-body-secondary">{{ $myap->employeeService->date_available }}</small>
        </div> -->
        <button type="submit" class="btn btn-primary">Detail</button>
    </div>
</form>
<br>
<br>
@endforeach
@else
{{-- User is not authenticated --}}
<p>You are not logged in.</p>
@endif


@endsection