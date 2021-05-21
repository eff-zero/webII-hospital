{{-- <div class="container text-center" id="nav">
    <div class="btn-group" role="group" aria-label="Button group">
        <a href="" class="mx-1 btn btn-outline-dark" style="color: "> Hospital  </a>
        <a href="" class="mx-1 btn btn-outline-dark" style="background-color: #117864; color: white"> Doctores  </a>
        <a href="" class="mx-1 btn btn-outline-dark" style="background-color: #117864; color: white"> Pacientes </a>
    </div>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mx-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('hospital.*') ? 'active' : ''}} text-uppercase" href="{{ route('hospital.index') }}"> Hospital </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('doctor.*') ? 'active' : ''}} text-uppercase" href="{{ route('doctor.index') }}"> Doctores </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('patient.*') ? 'active' : ''}} text-uppercase" href="{{ route('patient.index') }}"> Pacientes </a>
            </li>
        </ul>
    </div>
</nav>

