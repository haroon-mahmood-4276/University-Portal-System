<header class="container">

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/teacher/dashboard') }}">
            <img src="{{ asset('images/Logo-2.png') }}" width="70" height="57" class="d-inline-block align-top"
                alt="UNi Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-caret-down fa-lg" style="color: #224172;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 {{ Request::is('teacher/attendance') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/teacher/attendance') }}">
                        <span style="color: #224172;">Student Attendance</span></a>
                </li>
                <li class="nav-item mx-1 {{ Request::is('teacher/marks') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/teacher/marks') }}">
                        <span style="color: #224172;">Student Marks</span></a>
                </li>
            </ul>

            <div class="dropdown">
                <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                    <span class="avatar current"><span class="fas fa-user-graduate fa-2x mr-2 "
                            style="color: #224172;"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right text-center menu"
                    style="border: 1px solid #224172; padding: 5px;" id="action-menu-1-menu">
                    <a target="_blank" href="{{ asset('images/Logo-2.png') }}"> <img
                            src="{{ asset('images/Logo-2.png') }}" class="mb-3" width="50%"></a>
                    <p class="text-muted"> {{ strtoupper(Session('Teacher')->TCHR_ID) }} </p>
                    <p class="text-muted">
                        {{ Session('Teacher')->TCHR_FirstName . ' ' . Session('Teacher')->TCHR_LastName }}
                    </p>
                    <div class="dropdown-divider"></div>
                    <a href="/teacher/logout" class="btn btn-UNi" style="color: white;"><i
                            class="fas fa-power-off"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>
