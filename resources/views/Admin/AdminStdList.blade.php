@extends('Others.Master')

@section('PageTitle', 'Students List')

@section('content')
    @php
    $SrNo = 0;
    @endphp
    <div class="container my-4 text-center">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-3">
                <div class="input-group m-2 border rounded-pill p-1 searchbar"
                    style="border-radius: 10px; border: 2px solid #224172 !important;">
                    <div class="input-group-prepend border-0">
                        <button id="button-addon4" type="button" class="btn btn-link"><i class="fab fa-searchengin"
                                style="color: #224172;"></i></button>
                    </div>
                    <input type="search" placeholder="What're you searching for?" id="myInput" name="myInput"
                        aria-describedby="button-addon4" class="form-control bg-none border-0">
                </div>
            </div>
        </div>

        @if (session('Msg'))
            <div class="alert alert-{{ session('Msg.MsgType') }} alert-dismissible fade show" role="alert">
                <strong>{{ session('Msg.MsgD') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </strong>
            </div>
            {{ Session::forget('Msg') }}
        @endif

        <div class="table-responsive-md">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-UNi">
                        <th scope="col">#</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Program</th>
                        <th scope="col">School</th>
                        <th scope="col" style="width: 10%;" class="text-center"><a href="#"
                                id="mySTDBtn"><i class="fas fa-plus" style="color: white" aria-hidden="true"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody id="myTable">
                    @if ($ErrMsg)
                        <tr>
                            <td colspan="6">{{ $ErrMsg }}</td>
                        </tr>
                    @else

                        @foreach ($Students as $STDRow)
                            <tr>
                                <td>{{ ++$SrNo }}</td>
                                <td>{{ strtoupper($STDRow->STD_RollNo) }}</td>
                                <td>{{ $STDRow->STD_FirstName . ' ' . $STDRow->STD_LastName }}</td>
                                <td>{{ $STDRow->STDProgram . ' ( ' . $STDRow->STDSection . ' )' }}</td>
                                <td>{{ $STDRow->SchoolName . ' ( ' . $STDRow->SchoolAbb . ' )' }}</td>
                                <td class="link text-center">
                                    <a class="PDelete" href="/admin/student/delete/{{ $STDRow->STD_RollNo }}"
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

    {{ View::make('PopupModals.ModalAddSTD') }}

@endsection
