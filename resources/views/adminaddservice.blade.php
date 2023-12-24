
<h1>ALL SHIFT AVAILABLE STARTING TOMORROW</h1>
@foreach($empservices as $es)
                <div class="card">
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
                </div>
@endforeach
<br>
<h1>List of Employee</h1>
@foreach($emps as $emp)
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $emp->employee_name }}</h5>
                                <p class="card-text">{{ $emp->employee_id }}</p>
                        </div>
                </div>
@endforeach
<br>
<h1>List of Service</h1>
@foreach($services as $s)
                <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">{{ $s->service_name }}</h5>
                                <p class="card-text">{{ $s->service_id }}</p>
                        </div>
                </div>
@endforeach

<form method="post" action="{{ route('adminAddShift') }}">
    @csrf
    <div class="mb-3">
        <label for="employee_id" class="form-label">Employee ID:</label>
        <input type="text" class="form-control" name="employee_id" value="{{ old('employee_id') }}" required>
    </div>

    <div class="mb-3">
        <label for="service_id" class="form-label">Service ID:</label>
        <input type="text" class="form-control" name="service_id" value="{{ old('service_id') }}" required>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date with format Year-Month-Date</label>
        <input type="text" class="form-control" name="date" value="{{ old('date') }}" required>
    </div>

    <select id="shift" name="shift"> 
        <option value="9:30:00">9:30</option>
        <option value="11:30:00">11.30</option>
        <option value="13:30:00">13.30</option>
        <option value="15:30:00">15.30</option>
</select>

    <button type="submit" class="btn btn-primary">Add new Shift</button>
</form>