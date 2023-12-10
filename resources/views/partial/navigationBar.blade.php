@php
    $user = Auth::user();
@endphp
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">ReiRinSalon</a>
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
        <a class="nav-link" href="{{ route('logout') }}">logout</a>
        @else
        <a class="nav-link" href="{{ route('loginpage') }}">login</a>
        <a class="nav-link" href="{{ route('registerpage') }}">register</a>
        @endif
        <br>
    </div>
</nav>