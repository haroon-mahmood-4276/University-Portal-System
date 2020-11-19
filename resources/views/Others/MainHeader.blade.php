<header class="container">

    <nav class="navbar navbar-expand-md navbar-light bg-white">

        @if (session('Data.DataType') == 'Admin')
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                <img src="{{ asset('images/Logo-2.png') }}" width="70" height="57" class="d-inline-block align-top"
                    alt="UNi Logo">
            </a>
        @elseif (session('Data.DataType') == 'Teacher')
            <a class="navbar-brand" href="{{ url('/teacher/student/marks') }}">
                <img src="{{ asset('images/Logo-2.png') }}" width="70" height="57" class="d-inline-block align-top"
                    alt="UNi Logo">
            </a>
        @elseif (session('Data.DataType') == 'Student')
            <a class="navbar-brand" href="{{ url('#') }}">
                <img src="{{ asset('images/Logo-2.png') }}" width="70" height="57" class="d-inline-block align-top"
                    alt="UNi Logo">
            </a>
        @else
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/Logo-2.png') }}" width="70" height="57" class="d-inline-block align-top"
                    alt="UNi Logo">
            </a>
        @endif


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-caret-down fa-lg" style="color: #224172;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                @if (session('Data.DataType') == 'Admin')
                    <li class="nav-item mx-1 {{ Request::is('admin/dashboard') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                            <span style="color: #224172;">Dashboard</span></a>
                    </li>
                    <li class="nav-item mx-1 {{ Request::is('admin/students') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('/admin/students') }}">
                            <span style="color: #224172;">Student List</span>
                        </a>
                    </li>
                    <li class="nav-item mx-1 {{ Request::is('admin/teachers') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('/admin/teachers') }}">
                            <span style="color: #224172;">Staff List</span></a>
                    </li>
                @elseif (session('Data.DataType') == 'Teacher')
                    <li class="nav-item mx-1 {{ Request::is('teacher/attendance') ? 'active' : null }}">
                        <a class="nav-link" href="{{ url('/teacher/attendance') }}">
                            <span style="color: #224172;">Student Attendance</span></a>
                    </li>
                    <li class="nav-item mx-1 {{ Request::is('teacher/students/marks') ? 'active' : null }}">
                        <a class="nav-link" id="STDMarks" href="{{ url('/teacher/students/marks') }}">
                            <span style="color: #224172;">Student Marks</span></a>
                    </li>
                @elseif (session('Data.DataType') == 'Student')
                @else
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#"><span style="color: #224172;">About Us</span></a>
                    </li>
                @endif

            </ul>

            @if (session()->has('Data'))

                <div class="dropdown">
                    <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                        <span class="avatar current"><span class="fas fa-user-graduate fa-2x mr-2 "
                                style="color: #224172;"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right text-center menu"
                        style="border: 1px solid #224172; padding: 5px;" id="action-menu-1-menu">
                        <a target="_blank" href="{{ asset('images/Logo-2.png') }}"> <img
                                src="{{ asset('images/Logo-2.png') }}" class="mb-3" width="50%"></a>
                        <p class="text-muted"> {{ strtoupper(Session('Data')->ID) }} </p>
                        <p class="text-muted">
                            {{ Session('Data')->FirstName . ' ' . Session('Data')->LastName }}
                        </p>
                        @if (session('Data.DataType') == 'Admin')
                            <a href="/admin/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @elseif (session('Data.DataType') == 'Teacher')
                            <a href="/teacher/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @elseif (session('Data.DataType') == 'Student')
                            <a href="/student/logout" class="btn btn-UNi" style="color: white;"><i
                                    class="fas fa-power-off"></i></a>
                        @endif

                    </div>
                </div>
            @endif
        </div>
    </nav>
</header>
