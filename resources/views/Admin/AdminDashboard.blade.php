@extends('Admin.AdminLayout.AdminMaster')

@section('PageTitle', 'Dashboard')

@section('PageHeader')
    {{ View::make('Admin.AdminLayout.AdminHeader') }}
@endsection

@section('content')
    <div class="container mb-5 text-center">
        <!-- UMT Numbers -->
        <div class="my-4" style="color: #064473;">
            <div>
                <div class="card-deck">
                    <div class="card card-animation">
                        <span class="badge badge-pill badge-primary"
                            style="position: absolute; background-color: #224172; top: 5px; right: 5px;"><a href=" #"
                                id="mySchoolBtn"><i class="m-1 fas fa-plus" style="color: white" data-target="#myModel"
                                    aria-hidden="true"></i></a></span>

                        <div class="card-body">
                            <h2 class='card-title'>{{ $Schools }}</h2>
                            <p class="card-text">School(s)</p>
                        </div>

                    </div>
                    <div class="card card-animation">
                        <span class="badge badge-pill badge-primary "
                            style="position: absolute; background-color: #224172; top: 5px; right: 5px;"><a href=" #"
                                id="myProgramBtn"><i class="m-1 fa fa-plus" style="color: white"
                                    aria-hidden="true"></i></a></span>

                        <div class="card-body">
                            <h2 class='card-title'>{{ $Programs }}</h2>
                            <p class="card-text">Program(s)</p>
                        </div>
                    </div>
                    <div class="card card-animation">
                        <div class="card-body">
                            <h2 class='card-title'>{{ $Teachers }}</h2>
                            <p class="card-text">Faculty Member(s)</p>
                        </div>
                    </div>

                    <div class="card card-animation">
                        <div class="card-body">
                            <h2 class='card-title'>{{ $Students }}</h2>
                            <p class="card-text">Student(s)</p>
                        </div>
                    </div>


                    <div class="card card-animation">
                        <div class="card-body">
                            <h2 class="card-title">1</h2>
                            <p class="card-text">Online Database(s)</p>
                        </div>
                    </div>

                </div><br>

                <div class="card-deck ">

                    <div class="card card-animation">

                        <div class="card-body">
                            <h2 class="card-title">School of Professional Advancement</h2>
                            <h4 class="card-text">SPA</h4>
                        </div>

                        <div class="card-deck mx-1">

                            <div class="card card-animation mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Bachelor of Professional Studies</h2>
                                    <h4 class="card-text">BPS</h4>
                                </div>
                            </div>

                            <div class="card card-animation mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Master of Computer Sciences</h2>
                                    <h4 class="card-text">MCS</h4>
                                </div>
                            </div>

                            <div class="card card-animation mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Master of Banking and Finance</h2>
                                    <h4 class="card-text">MBF</h4>
                                </div>
                            </div>

                            <div class="card card-animation mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Master of Project Management</h2>
                                    <h4 class="card-text">MPM</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
