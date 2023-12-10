@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
        {{-- User is authenticated --}}
        <p>Welcome, {{ $user->customer_name }}</p>
        <p>Email: {{ $user->email }}</p>
        {{-- Other user information --}}
@else
        {{-- User is not authenticated --}}
        <p>You are not logged in.</p>
@endif
<h1>Welcome back </h1>
<div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="pic\banner2.png" class="d-block w-100" style="height: 300px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner2.png" class="d-block w-100" style="height: 300px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner2.png" class="d-block w-100" style="height: 300px" alt="...">
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
</div>
<div class="card mb-3 mt-5">
        <img src="pic\banner2.png" class="card-img-top" alt="...">
        <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
</div>
<div class="card mt-5">
        <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
        <img src="pic\banner2.png" class="card-img-bottom" alt="...">
</div>

<h1>Our Employee</h1>
<div class="row row-cols-1 row-cols-md-2 g-4 " style="width: 650px;">
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;">
                        <div class="card-body">
                                <h5 class="card-title">Irene Liana</h5>
                                <p class="card-text">The founder of Reirin Salon, Irene Liana dedicated her hardwork in establishing a safe working enviournment</p>
                        </div>
                </div>
        </div>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">Rinianti</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                </div>
        </div>
</div>

<h1>Promo and Subscription!</h1>
<div class="row row-cols-1 row-cols-md-2 g-4 " style="width: 650px;">
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;">
                        <div class="card-body">
                                <h5 class="card-title">Irene Liana</h5>
                                <p class="card-text">The founder of Reirin Salon, Irene Liana dedicated her hardwork in establishing a safe working enviournment</p>
                        </div>
                </div>
        </div>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">Rinianti</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                </div>
        </div>
</div>

<h2>Employees</h2>
<ul>
        @foreach ($employee as $emp)
                <li>{{ $emp->employee_name }}</li>
        @endforeach
</ul>

<h2>Promotions</h2>
<ul>
        @foreach ($promo as $pr)
                <li>{{ $pr->promo_name }}</li>
                <p>{{ $pr->promo_desc}}</p>
        @endforeach
</ul>

@endsection