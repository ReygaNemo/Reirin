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

<form method="post" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
        <label for="customer_name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="customer_phone" class="form-label">Phone:</label>
        <input type="text" class="form-control" name="customer_phone" value="{{ old('customer_phone') }}" required>
    </div>

    <div class="mb-3">
        <label for="customer_address" class="form-label">Address:</label>
        <input type="text" class="form-control" name="customer_address" value="{{ old('customer_address') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection