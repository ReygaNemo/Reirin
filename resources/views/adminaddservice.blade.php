
@extends('layouts.layout3')
@section('container')

<!-- <h1>ALL SHIFT AVAILABLE STARTING TOMORROW</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">All Shift Available Starting Tomorrow</h1>
    </div>
</div>
@foreach($empservices as $es)
<div class="card border-dark">
    <div class="card-body">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">{{ $es->date_available}}</h4>
            <h4 class="card-text">{{ $es->time_available}}</h4>
        </div>
        <div class="ms-3">
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Service</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $es->employee_service_id }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Employee Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $es->employee->employee_name }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Service Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $es->service->service_name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

                <!-- <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $es->employee_service_id }}</h5>
                                <p class="card-text">{{ $es->employee->employee_name }}</p>
                                <p class="card-text">{{ $es->service->service_name }}</p>
                        </div>
                        <div class="card-footer">
                                <small class="text-body-secondary">{{ $es->date_available}}</small>
                                <br>
                                <small class="text-body-secondary">{{ $es->time_available}}</small>
                        </div>
                </div> -->
@endforeach
<br>
<!-- <h1>List of Employee</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">List of Employee</h1>
    </div>
</div>
@foreach($emps as $emp)
<div class="card border-dark">
    <div class="card-body">
        <div class="ms-3">
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Employee Id</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $emp->employee_id }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Employee Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $emp->employee_name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
                <!-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $emp->employee_name }}</h5>
                            <p class="card-text">{{ $emp->employee_id }}</p>
                        </div>
                </div> -->
@endforeach
<br>
<!-- <h1>List of Service</h1> -->
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">List of Service</h1>
    </div>
</div>
@foreach($services as $s)
<div class="card border-dark">
    <div class="card-body">
        <div class="ms-3">
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Service Id</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $s->service_id }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="mb-0">Service Name</h4>
                </div>
                <div class="col-sm-9">
                    <h4 class="text-muted mb-0">: {{ $s->service_name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
                <!-- <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $s->service_name }}</h5>
                                <p class="card-text">{{ $s->service_id }}</p>
                        </div>
                </div> -->
@endforeach

<br>
<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Add Employee Service</h1>
    </div>
</div>
<form method="post" action="{{ route('adminAddShift') }}">
    @csrf
    <div class="mb-3">
        <label for="employee_id" class="form-label" style="font-size: 18px;">Employee ID:</label>
        <input type="text" class="form-control" name="employee_id" value="{{ old('employee_id') }}" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="service_id" class="form-label" style="font-size: 18px;">Service ID:</label>
        <input type="text" class="form-control" name="service_id" value="{{ old('service_id') }}" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="date" class="form-label" style="font-size: 18px;">Date with format Year-Month-Date</label>
        <input type="text" class="form-control" name="date" value="{{ old('date') }}" required>
    </div>
    <!-- <br> -->
    <div class="mb-4 mt-5">
    <label for="time:" class="form-label me-3" style="font-size: 18px;">Time: </label>
    <select id="shift" name="shift"> 
        <option value="9:30:00">9:30</option>
        <option value="11:30:00">11.30</option>
        <option value="13:30:00">13.30</option>
        <option value="15:30:00">15.30</option>
    </select>
    </div>

    <!-- <div class="text-center text-lg-start mt-4 pt-2">
        <button type="submit" class="btn btn-primary btn-lg"
        style="padding-left: 2.5rem; padding-right: 2.5rem;">Add new Shift</button>
    </div> -->
    <br>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
        <button type="submit" class="btn btn-primary btn-lg"
        style="padding-left: 2.5rem; padding-right: 2.5rem;">Add new Shift</button>
        </div>
    </div>

    <!-- <button type="submit" class="btn btn-primary">Add new Shift</button> -->
</form>

@endsection
