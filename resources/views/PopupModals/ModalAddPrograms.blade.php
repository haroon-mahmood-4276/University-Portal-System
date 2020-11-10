<div class="modal fade bd-example-modal-lg" id="myProgramModal" tabindex="-1" role="dialog" data-backdrop="static"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="/admin/programs/add" name="addProgram">
                @csrf
                <!-- Modal Header -->
                <div class="modal-header bg-UNi">
                    <h4 class="modal-title mr-auto">Programs</h4>
                    <button type="button" class="ml-2 btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <!-- <div class="divider"></div> -->
                <!-- Modal body -->
                <div class="modal-body">
                    <div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Login Credentials</h4> -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtProgramCode">Program Code</label>
                                        <input type="text" class="form-control" id="txtProgramCode"
                                            name="txtProgramCode" minlength="3" maxlength="3" placeholder="Program Code"
                                            value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtProgramName">Program Name</label>
                                        <input type="text" class="form-control" id="txtProgramName"
                                            name="txtProgramName" maxlength="50" placeholder="Program Name" value=""
                                            required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtSectionCode">Section Code</label>
                                        <input type="text" class="form-control" id="txtSectionCode"
                                            name="txtSectionCode" minlength="2" maxlength="2" placeholder="Section Code"
                                            value="" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtSectionName">Section Name</label>
                                        <input type="text" class="form-control" id="txtSectionName"
                                            name="txtSectionName" maxlength="50" placeholder="Section Name" value=""
                                            required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="cbSchool">School</label>
                                        <select name="cbSchool" class="custom-select d-block" id="cbSchool" required>
                                            @foreach ($Schools as $item)
                                                <option value="{{ $item->SCL_SchoolCode }}">
                                                    {{ $item->SCL_SchoolName . ' ( ' . $item->SCL_SchoolAbb . ' )' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtTotalSemester">Total Semester</label>
                                        <input type="number" class="form-control" id="txtTotalSemester"
                                            name="txtTotalSemester" maxlength="1" placeholder="Total Semester" value=""
                                            required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtTotalCrHr">Total Credit Hrs</label>
                                        <input type="number" class="form-control" id="txtTotalCrHr" name="txtTotalCrHr"
                                            placeholder="Total Credit Hrs" value="" maxlength="1" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer bg-UNi">
                    <input type="submit" class="btn btn-UNi" name="submit" value="Save" />
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
