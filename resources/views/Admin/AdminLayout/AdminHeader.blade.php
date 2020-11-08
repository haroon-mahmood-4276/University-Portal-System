<header class="container">

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
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
                <li class="nav-item mx-1 {{ Request::is('admin/dashboard') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                        <span style="color: #224172;">Dashboard</span></a>
                </li>
                <li class="nav-item mx-1 {{ Request::is('admin/student-list') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/admin/student-list') }}">
                        <span style="color: #224172;">Student List</span>
                    </a>
                </li>
                <li class="nav-item mx-1 {{ Request::is('admin/staff-list') ? 'active' : null }}">
                    <a class="nav-link" href="{{ url('/admin/staff-list') }}">
                        <span style="color: #224172;">Staff List</span></a>
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
                    <p class="text-muted"> {{ strtoupper(Session('Admin')->ADMIN_ID) }} </p>
                    <p class="text-muted">
                        {{ Session('Admin')->ADMIN_FirstName . ' ' . Session('Admin')->ADMIN_LastName }}
                    </p>
                    <div class="dropdown-divider"></div>
                    <a href="/admin/logout" class="btn btn-UNi" style="color: white;">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</header>
