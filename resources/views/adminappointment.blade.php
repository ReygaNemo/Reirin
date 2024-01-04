@extends('layouts.layout3')
@section('container')

<!-- <h1>AVAILABLE EMPLOYEE SERVICE WITH SHIFT</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Available Employee Service with Shift</h1>
    </div>
</div>

@foreach($appointments as $ap)
<form action="{{ route('changeStatus') }}" method="post">
    @csrf
    <input type="hidden" name="appointment_id" value="{{ $ap->appointment_id }}">
    <div class="card border-dark">
        <div class="card-body">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{ $ap->appointment_id}}</h4>
                @if($ap->appstatus->appstatus_name == 'Appointment Not Started')
                    <h4 class="card-text">{{ $ap->appstatus->appstatus_name }}</h4>
                @elseif($ap->appstatus->appstatus_name == 'Appointment Inprogress')
                    <h4 class="card-text text-primary">{{ $ap->appstatus->appstatus_name }}</h4>>
                @else
                    <h4 class="card-text text-success">{{ $ap->appstatus->appstatus_name }}</h4>
                @endif
            </div>
            <div class="ms-3">
                <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Customer Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $ap->customer->customer_name }}</h4>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Service</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $ap->employeeService->service->service_name }}</h4>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Employee Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $ap->employeeService->employee->employee_name }}</h4>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Date</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $ap->employeeService->date_available}}</h4>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Time</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $ap->employeeService->time_available}}</h4>
                </div>
                </div>
            </div>
            <!-- <h4 class="card-title">Customer Name: {{ $ap->customer->customer_name }}</h4>
            <h4 class="text-body-secondary">Service: {{ $ap->employeeService->service->service_name }}</h4>
            <h4 class="card-text">{{ $ap->employeeService->employee->employee_name }}</p>
            <h4 class="text-body-secondary">Date: {{ $ap->employeeService->date_available}}</h4>
            <h4 class="text-body-secondary">Time: {{ $ap->employeeService->time_available}}</h4> -->
        </div>
        @if($ap->appstatus_id <= 3)
            <button type="submit" class="btn btn-primary">Change Status</button>
        @endif
    </div>
</form>

        <!-- <form action="{{ route('changeStatus') }}" method="post">
                @csrf
                <input type="hidden" name="appointmentId" value="{{ $ap->appointment_id }}">
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $ap->customer->customer_name }}</h5>
                                <p class="card-text">{{ $ap->employeeService->employee->employee_name }}</p>
                                <p class="card-text">{{ $ap->employeeService->service->service_name }}</p>
                        </div>
                        <div class="card-footer">
                                <small class="text-body-secondary">{{ $ap->appointment_id}}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->appstatus->appstatus_name }}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->employeeService->date_available}}</small>
                                <br>
                                <small class="text-body-secondary">{{ $ap->employeeService->time_available}}</small>
                        </div>
                        @if($ap->appstatus_id <= 3)
                                <button type="submit" class="btn btn-primary">Change Status</button>
                        @endif
                </div>
        </form> -->
<br>
<br>
@endforeach
@endsection

