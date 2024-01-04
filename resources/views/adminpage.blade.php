@extends('layouts.layout3')
@section('container')

@php
$user = Auth::user();
@endphp

@if($user)
        {{-- User is authenticated --}}
        <!-- <p>Welcome, {{ $user->customer_name }}</p> -->
        <!-- <p>Email: {{ $user->email }}</p> -->
        <!-- <h1>Welcome back to ReiRinSalon</h1> -->
        <!-- <h4>Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ORIBEL Salon & Wellness</h4> -->
        <div class="text-center">
          <h1 class="judul display-1 mt-5 mb-5" style="padding-top: 120px">Welcome to the Admin Page ReiRinSalon,</h1>
          <h1 class="judul display-1 mt-4 mb-5" style="padding-bottom: 62px">{{ $user->customer_name }}!</h1>
        </div>
        {{-- Other user information --}}
@endif

<!-- <div>
        <h1>Welcome to the Admin Page</h1>
        <div>
            <a href="{{ route('adminAppointment') }}" class="btn btn-primary">View All Appointments</a>
            <a href="{{ route('adminEmpSer') }}" class="btn btn-success">Add Employee Service</a>
        </div>
</div> -->
@endsection
