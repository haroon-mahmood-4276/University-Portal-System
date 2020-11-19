<div class="modal fade bd-example-modal-lg" id="myTCHRModal" tabindex="-1" role="dialog" data-backdrop="static"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="/admin/teachers/add" name="addstd">

                @csrf
                <!-- Modal Header -->
                <div class="modal-header bg-UNi">
                    <h4 class="modal-title mr-auto">Add Teacher</h4>
                    <button type="button" class="ml-2 btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Login Credentials</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtUserID">User ID</label>
                                        <input type="text" class="form-control" id="txtUserID" name="txtUserID"
                                            minlength="11" maxlength="11" placeholder="User ID" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="txtUserPass">Password</label>
                                        <input type="password" class="form-control" id="txtUserPass" name="txtUserPass"
                                            placeholder="Password" minlength="6" maxlength="20" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-animation my-3">
                            <div class="card-body">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="txtFirstName">First Name</label>
                                        <input type="text" class="form-control" id="txtFirstName" name="txtFirstName"
                                            placeholder="First Name" maxlength="50" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtLastName">Last Name</label>
                                        <input type="text" class="form-control" id="txtLastName" name="txtLastName"
                                            placeholder="Last Name" maxlength="50" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtEmail">Email</label>
                                        <input type="email" class="form-control" id="txtEmail" name="txtEmail"
                                            placeholder="Email" maxlength="50" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtCNIC">CNIC</label>
                                        <input type="text" class="form-control" id="txtCNIC" name="txtCNIC"
                                            minlength="15" maxlength="15" placeholder="XXXXX-XXXXXXX-X" value=""
                                            required>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="cbCountry">Country</label>
                                        <select name="cbCountry" class="custom-select d-block" id="cbCountry" required>
                                            <option value="000" selected>Select</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbCity">City</label>
                                        <select name="cbCity" class="custom-select d-block" id="cbCity" required>
                                            <option value="00000" selected>Select</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbSchool">School</label>
                                        <select name="cbSchool" class="custom-select d-block" id="cbSchool" required>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="cbprogram">Program</label>
                                        <select name="cbProgram" class="custom-select d-block" id="cbProgram" required>
                                            <option value="000" selected>Select</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3" id="combosec">
                                        <label for="cbSection">Section</label>
                                        <select name="cbSection" class="custom-select d-block" id="cbSection" required>
                                            <option value="00" selected>Select</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtPost">Post</label>
                                        <input type="text" class="form-control" id="txtPost" name="txtPost"
                                            placeholder="Post" maxlength="50" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtSpecialty">Specialty</label>
                                        <input type="text" class="form-control" id="txtSpecialty" name="txtSpecialty"
                                            placeholder="Specialty" maxlength="50" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="txtPhoneNo">Phone Number</label>
                                        <input type="text" class="form-control" id="txtPhoneNo" name="txtPhoneNo"
                                            placeholder="03XXXXXXXXX" maxlength="12" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="txtAddress">Address</label>
                                        <textarea class="form-control" name="txtAddress" id="txtAddress" maxlength="160"
                                            placeholder="Address" rows="4"></textarea>
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
