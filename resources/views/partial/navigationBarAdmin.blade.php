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
                    <a class="nav-link" href="{{ route('adminAppointment') }}">View All Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminEmpSer') }}">Add Employee Service</a>
                </li>
            </ul>
        </div>
        <a class="nav-link mx-3" href="{{ route('logout') }}">Logout</a>
        <br>
    </div>
</nav>