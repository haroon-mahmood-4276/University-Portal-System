<header class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                <li class="nav-item mx-1 active">
                    <a class="nav-link" href="../Admin/Dashboard.php"><span style="color: #224172;">Dashboard</span></a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="../Admin/StudentList.php"><span style="color: #224172;">Student
                            List</span></a>
                </li>
                <!-- <li class="left-divider ml-2 mr-2"></li> -->
                <li class="nav-item mx-1">
                    <a class="nav-link" href="../Admin/StaffList.php"><span style="color: #224172;">Staff
                            List</span></a>
                </li>
            </ul>

            <div class="dropdown">
                <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                    <span class="avatar current"><span class="fas fa-user-graduate fa-2x mr-2 "
                            style="color: #224172;"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right p-3 menu" id="action-menu-1-menu" id="dropdown-menu-1">
                    <a target="_blank" href="../images/Menu/Logo-2.png"> <img src="../images/Menu/Logo-2.png"
                            class="mb-3" width="50%"></a>
                    <p class="lead text-muted"> </p>
                    <p class="text-muted"></p>
                    <div class="dropdown-divider"></div>
                    <a href="../Logout.php" class="btn btn-UNi" style="color: white;">Logout</a>

                </div>
            </div>

        </div>
    </nav>

    {{--
    <div class="container-fluid sticky-top bg-white">
        <nav class="navbar navbar-expand-md p-2 bottom-divider" style="position: sticky;">
            <a class="navbar-brand" href="../Admin/StudentList.php">
                <img src="../images/Brand-1.png" alt="logo" class="img-fluid" style="width:500px;">
            </a>
            <button class="navbar-toggler ml-auto mb-2 mt-3" type="button" data-toggle="collapse"
                data-target="#MyNavHorizontal">
                <span class="fa fa-caret-down fa-2x" style="color: #224172;"></span>
            </button>
            <div class="collapse navbar-collapse ml-5 mr-3 pl-5" id="MyNavHorizontal">

                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../Admin/Dashboard.php"><span
                                style="color: #224172;">Dashboard</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../Admin/StudentList.php"><span style="color: #224172;">Student
                                List</span></a>
                    </li>
                    <!-- <li class="left-divider ml-2 mr-2"></li> -->
                    <li class="nav-item ">
                        <a class="nav-link" href="../Admin/StaffList.php"><span style="color: #224172;">Staff
                                List</span></a>
                    </li>
                    <!-- <li class="left-divider ml-2 mr-2"></li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="../Admin/Email.php">Email</a>
                    </li> -->
                </ul>
                <div class="dropdown ml-auto">
                    <a href="" class="nav-link icon-no-margin" data-toggle="dropdown" role="button">
                        <span class="avatar current"><span class="fa fa-user-circle-o fa-3x mr-2 "
                                style="color: #224172;"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right p-3 menu" id="action-menu-1-menu"
                        id="dropdown-menu-1">

                        <center>
                            <a target="_blank" href="../images/Menu/Logo-2.png"> <img src="../images/Menu/Logo-2.png"
                                    class="mb-3" width="50%"></a>
                            <p class="lead text-muted"> </p>
                            <p class="text-muted"></p>
                            <div class="dropdown-divider"></div>
                            <a href="../Logout.php" class="btn btn-UNi" style="color: white;">Logout</a>
                        </center>
                    </div>
                </div>
            </div>
        </nav>
    </div> --}}
</header>
