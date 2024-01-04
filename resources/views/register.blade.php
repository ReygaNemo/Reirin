@extends('layouts.layout1')
@section('container')

@if($errors)
<div class="alert alert-danger">
    <ul>
        <p>an error occurs</p>
        @foreach($errors as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@else
<p>no error?</p>
@endif

<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
        <h1 class="judul display-1 mb-5">Register</h1>
    </div>
</div>

<form method="post" action="{{ route('register') }}">
    @csrf
    <br>
    <div class="mb-3">
        <label for="customer_name" class="form-label" style="font-size: 18px;">Name:</label>
        <input type="text" class="form-control" name="customer_name" value="{{ old('customerName') }}" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="password" class="form-label" style="font-size: 18px;">Password:</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="email" class="form-label" style="font-size: 18px;">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="customer_phone" class="form-label" style="font-size: 18px;">Phone:</label>
        <input type="text" class="form-control" name="customer_phone" value="{{ old('customer_phone') }}" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="customer_address" class="form-label" style="font-size: 18px;">Address:</label>
        <input type="text" class="form-control" name="customer_address" value="{{ old('customer_address') }}" required>
    </div>
    <br>
    <br>
    <!-- <button type="submit" class="btn btn-primary">Register</button> -->
    
    <!-- <div class="text-center text-lg-start mt-4 pt-2">
        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
    </div> -->

    <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
    </div>
</div>
</form>
@endsection