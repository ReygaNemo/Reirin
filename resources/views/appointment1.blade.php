@extends('layouts.layout1')
@section('container')

<h1>Pick your a date for your !</h1>
@if($selectedService)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $selectedService->service_name }}</h5>
        <p class="card-text">{{ $selectedService->service_desc }}</p>
    </div>
    <div class="card-footer">
        <small class="text-body-secondary">{{ $selectedService->service_price }}</small>
    </div>
</div>
@else
<p>No service selected.</p>
@endif
<h3>heres the list of shift of employee</h3>
<li>
    <ul>9.30</ul>
<ul>11.30 </ul>
<ul>13.30 </ul>
<ul>15.30</ul>
</li>
<div>
    <h2>Choose Date</h2>
    <form action="{{route('checkEmployee')}}" method="post">
        @csrf
        <div class='input-group date' id='picker'>
            <input type='text' class="form-control" name="chosenDate" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <input type="submit" value="Submit" />
    </form>
    <script type="text/javascript">
        $(function() {
            $('#picker').datetimepicker({

                defaultDate: moment(),
                minDate: moment().subtract(1, 'days'),
                stepping: 30,
                daysOfWeekDisabled: [0],
                defaultDate: moment().set({
                    hour: 9,
                    minute: 30
                }),
                inline: true,
                sideBySide: true,
            }).on('dp.change', function(e) {
                // Handle change event
                var selectedHour = e.date.hour();
                if (selectedHour < 9 || selectedHour > 15) {
                    // If the selected hour is outside the range 9-15, reset to the nearest valid hour
                    var nearestHour = (selectedHour < 9) ? 9 : 15;
                    $(this).data('DateTimePicker').date(e.date.set('hour', nearestHour).set('minute', 0));
                }
            });
        });
    </script>
</div>

@if($employee)
<h2>Available Employees</h2>
<ul>
    @foreach($employee as $emp)
    <li>
        <form action="{{ route('paymentStep') }}" method="post">
            @csrf
            <input type="hidden" name="employeeService" value="{{ $emp->employee_service_id }}">
            <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                {{ $emp->employee->employee_name }}
            </button>
                {{ $emp->time_available }}
        </form>
    </li>
    @endforeach
</ul>
@else
<p>No available employees for the selected date.</p>
@endif




@endsection