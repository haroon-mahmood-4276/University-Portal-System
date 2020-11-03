<header class="container">

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="#">
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
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                        <span style="color: #224172;">Dashboard</span></a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ url('/admin/student-list') }}">
                        <span style="color: #224172;">Student List</span>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ url('/admin/staff-list') }}">
                        <span style="color: #224172;">Staff List</span></a>
                </li>
            </ul>

            <div class="dropdown">
                <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                    <span class="avatar current"><span class="fas fa-user-graduate fa-2x mr-2 "
                            style="color: #224172;"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right p-3 text-center menu" id="action-menu-1-menu" id="dropdown-menu-1">
                    <a target="_blank" href="{{ asset('images/Logo-2.png') }}"> <img src="{{ asset('images/Logo-2.png') }}"
                            class="mb-3" width="50%"></a>
                    <p class="lead text-muted"> </p>
                    <p class="text-muted"></p>
                    <div class="dropdown-divider"></div>
                    <a href="../Logout.php" class="btn btn-UNi" style="color: white;">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</header>
