@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
{{-- User is authenticated --}}
<h1>Reserve now and choose one of our Service!</h1>
<div class="card-group">

        @foreach($services as $service)
        <form action="{{ route('select-service') }}" method="post">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->service_id }}">
                <div class="card">
                        <img src="pic\banner2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">{{ $service->service_name }}</h5>
                                <p class="card-text">{{ $service->service_desc }}</p>
                        </div>
                        <div class="card-footer">
                                <small class="text-body-secondary">{{ $service->service_price }}</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Select</button>
                </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        @endforeach

        <!-- @foreach($services as $service)
<a>
        <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">{{ $service->service_name }}</h5>
                        <p class="card-text">{{ $service->service_desc }}</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">{{ $service->service_price }}</small>
                </div>
        </div>     
</a>
@endforeach -->

        <!-- <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
        </div>
        <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
        </div> -->
</div>
@else
{{-- User is not authenticated --}}
<p>You are not logged in.</p>
@endif



@endsection