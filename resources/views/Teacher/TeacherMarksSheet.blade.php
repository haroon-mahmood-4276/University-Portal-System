@extends('Others.Master')

@section('PageTitle', 'Marks Sheet')

@section('PageHeader')
    {{ View::make('Teacher.TeacherLayout.TeacherHeader') }}
@endsection


@section('content')
    <div class="container my-3">
        <form method="POST" action="" name="filterData">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                    <label class="custom-select-label" for="cbPrograms">Programs</label>
                    <select name="cbProgram" class="custom-select d-block" id="cbprogram" required>
                        <option value="00" selected>Select</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                    <label class="custom-select-label" for="cbSection">Section</label>
                    <select name="cbSection" class="custom-select d-block" id="cbSection" required>
                        <option selected value="00">Select</option>
                        <option value="01">A</option>
                        <option value="02">B</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 py-3">

                    <label class="custom-select-label" for="cbSubjects">Subject</label>
                    <input type="text" name="txtSubject" class="form-control" id="txtSubject" required>

                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                    <label class="custom-select-label" for="dClassDate">Class Date</label>
                    <input type="date" class="form-control" placeholder="Date" id="dClassDate" name="dClassDate" required>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 py-3">

                    <label class="custom-select-label" for="cbExamTye">Type</label>
                    <select name="cbExamTye" class="custom-select d-block" id="cbExamTye" required>
                        <option selected>Select</option>
                        <option value="Quiz">Quiz</option>
                        <option value="Mids">Mids</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3">

                    <label class="custom-select-label" for="TxtTotalMarks">Total Marks</label>
                    <input type="number" class="form-control" placeholder="Total Marks" id="TxtTotalMarks"
                        name="TxtTotalMarks" min="0.0" max="100" value="0" required>
                </div>

            </div>

            <button class="btn btn-UNi btn-md" type="button" onclick="ShowSTDMARKS(1,1)">Create Marks Sheet</button>
            <button class="btn btn-danger btn-md" type="reset" onclick="ShowSTDMARKS(0,0)">Refresh</button>


            <!-- List of Student -->
            <div id="STDMARKSList">

            </div>
            <!-- End of List of Student -->

        </form>

    </div>
@endsection
