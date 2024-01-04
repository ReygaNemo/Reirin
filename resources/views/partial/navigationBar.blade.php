@php
    $user = Auth::user();
@endphp
<nav class="navbar navbar-expand-lg bg_navbar">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="/">ReiRinSalon</a> -->
        <a class="navbar-brand h-100" href="/">
            <img src="pic\logo.png" style="height: 40px" class="mt-0" alt="...">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }} " href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Appointment') ? 'active' : '' }}" href="/appointment">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'MyAppointment') ? 'active' : '' }}" href="/myappointment">My Appointment</a>
                </li>
            </ul>
        </div>
        @if($user)
        <a class="nav-link {{ ($title === 'MyAppointment') ? 'active' : '' }}" href="/editprofile">Profile</a>
        <a class="nav-link mx-3" href="{{ route('logout') }}">Logout</a>
        @else
        <a class="nav-link" href="{{ route('loginpage') }}">Login</a>
        <a class="nav-link mx-3" href="{{ route('registerpage') }}">Register</a>
        @endif
        <br>
    </div>
</nav>
<style>
    /* nav{
        background-color: #F8ECE9;
    } */
</style>