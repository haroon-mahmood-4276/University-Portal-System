@extends('Admin.AdminLayout.AdminMaster')

@section('PageTitle', 'Staff List')

@section('PageHeader')
    {{ View::make('Admin.AdminLayout.AdminHeader') }}
@endsection

@section('content')
    <div class="container my-5 text-center">
        <div class="table-responsive-md">

            <div class="input-group mb-3">
                <input class="form-control" id="myInput" type="text" placeholder="Search.." autofocus>
                <div class="input-group-append">
                    <button class="btn btn-UNi" type="submit">Refresh</button>
                </div>
            </div>

            <br>
            <table class="table table-hover">

                <thead>
                    <tr class="bg-UNi">
                        <th scope="col">#</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Program</th>
                        <th scope="col">Sec</th>
                        <th scope="col">School</th>
                        <th scope="col" style="width: 10%;" class="text-center"><a class="PTCHRAdd" href=" #"
                                id="myTCHRBtn"><i class="fa fa-plus" style="color: white" aria-hidden="true"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody id="myTable">
                    @if ($ErrMsg)
                        <tr>
                            <td colspan="6">{{ $ErrMsg }}</td>
                        </tr>
                    @else
                        @foreach ($Teachers as $TchrRow)
                            <tr>
                                <td>1</td>
                                <td>{{ $TchrRow->TCHR_ID }}</td>
                                <td>{{ $TchrRow->TCHR_FirstName . ' ' . $TchrRow->TCHR_LastName }}</td>
                                <td>{{ $TchrRow->TCHR_Post }}</td>
                                <td>{{ $TchrRow->SchoolName . ' ( ' . $TchrRow->SchoolAbb . ' )' }}</td>
                                <td class="link text-center">
                                    <a class="PDelete" href="StaffList.php?ID=&WorkAction=Delete"
                                        onClick="return confirm('Are you sure you want to delete?')"><i
                                            class="far fa-trash-alt" style="color: #224172" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
