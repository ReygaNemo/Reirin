@extends('layouts.layout1')
@section('container')
<h1>Thankyou for choosing ReiRinSalon! heres all your appointment!</h1>
@foreach($appointments as $myap)
<form action="{{ route('select-appointment') }}" method="post">
    @csrf
    <input type="hidden" name="appointment_id" value="{{ $myap->appointment_id }}">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $myap->appointment_id }}</h5>
            <p class="card-text">{{ $myap->appstatus->appstatus_name }}</p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">{{ $myap->employeeService->date_available }}</small>
            <small class="text-body-secondary">{{ $myap->employeeService->service->service_name }}</small>
            <small class="text-body-secondary">{{ $myap->payment->payment_type_name }}</small>
        </div>
        <button type="submit" class="btn btn-primary">Detail</button>
    </div>
</form>
<br>
<br>
<br>
<br>
@endforeach

@endsection