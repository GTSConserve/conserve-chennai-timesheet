<div>
    <div class="page-header">
        <div class="page-title">
            <h3 >Edit Employee</h3>
        </div>
    </div>
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="{{$basic_active}}">Basic Details</li>
                <li class="{{$education_active}}">Education</li>
                <li class="{{$identification_active}}">Identification </li>
                <li class="{{$offical_active}}">Offical</li>
            </ul>
                {{--================BAsic Details=========================== --}}
                @if ($status == 1)
                    <fieldset>
                        <h5 class="text-left p-1"><b>Basic Details</b></h5>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable">First Name</label>
                                <input type="text" class="form_input" wire:model="first_name" placeholder="First Name">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Last Name</label>
                                <input type="text" class="form_input" wire:model="last_name" placeholder="Last Name">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Gender</label>
                                <select name="" class="form_input" id="" wire:model="gender">
                                    <option value="">-Select Gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Date Of Birth (In certificate)</label>
                                <input type="date" class="form_input" wire:model="certificate_dob" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable">Date Of Birth (Original)</label>
                                <input type="date" class="form_input" wire:model="orginal_dob" placeholder="">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Marital Status</label>
                                <select class="form_input" wire:model="marital_status">
                                    <option value selected disabled>Select Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">User Name</label>
                                <input type="Email" class="form_input" wire:model="user_name" placeholder="Enter Email">
                            </div>
                            <div class="col-sm-3">
                                <label>Phone No</label>
                                <input type="text" class="form_input" wire:model="phone_number" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label id="lable">Official E-mail</label>
                                <input type="email" class="form_input" wire:model="offical_email" placeholder="Official E-Mail">
                            </div>
                            <div class="col-sm-6">
                                <label id="lable">Personal E-Mail</label>
                                <input type="email" class="form_input" wire:model="personal_email" placeholder="Personal E-Mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label id="lable">Nationality</label>
                                <input type="Email" class="form_input" wire:model="nationality" placeholder="Nationality">
                            </div>
                            <div class="col-sm-6">
                                <label>Alternative Phone No</label>
                                <input type="text" class="form_input" wire:model="alter_phone_number" placeholder="Enter Phone">
                            </div>
                        </div>
                            {{--================Personal Details=========================== --}}
                        <h5 class="text-left p-1"><b>Personal Details</b></h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <label id="lable">Father’s / Spouse Name</label>
                                <input type="Email" class="form_input" wire:model="father_name" placeholder="Father’s / Spouse Name">
                            </div>
                            <div class="col-sm-6">
                                <label>Blood Group</label>
                                <input type="text" class="form_input" wire:model="blood_group" placeholder="Blood Group">
                            </div>
                            <div class="col-sm-6">
                                <label id="lable">Residential Address</label>
                                {{-- <input type="Email" placeholder="Residential Address"> --}}
                                <textarea name="" class="form_input" wire:model="residential_address" id="" cols="30" rows="2"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label>Permanent Address</label>
                                <textarea name="" class="form_input" wire:model="permenente_address" id="" cols="30" rows="2" ></textarea>
                                {{-- <input type="text" placeholder="Permanent Address"> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label id="lable">Emergency Contact</label>
                                <input type="Email" class="form_input" wire:model="emergency_contact_name" placeholder="Name">
                            </div>
                            <div class="col-sm-4">
                                <label>Relation</label>
                                <input type="text" class="form_input" wire:model="emergency_contact_relation" placeholder="Relation">
                            </div>
                            <div class="col-sm-4">
                                <label>Contact Number</label>
                                <input type="text" class="form_input" wire:model="emergency_contact_number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <input type="button" name="next" class="next action-button" wire:click="basic_next()" value="Next" >
                            </div>
                        </div>
                    </fieldset>
                @endif
            {{-- ==============Education============== --}}
                @if ($status == 2)
                    <fieldset>
                        <h5 class="text-left p-1"><b>Education Details</b></h5>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable"><b>SSLC</b></label>
                                <input type="text" class="form_input" wire:model="sslc_institution" placeholder="Institution">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">&nbsp</label>
                                <input type="text" class="form_input" wire:model="sslc_board" placeholder="Board">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">&nbsp</label>
                                <input type="date" class="form_input" wire:model="sslc_date" placeholder="">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="number" class="form_input" wire:model="sslc_percentage" placeholder="Percentage">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="file" class="form_input" wire:model="sslc_file" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable"><b>HSC</b></label>
                                <input type="text" class="form_input" wire:model="hsc_institution" placeholder="Institution">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">&nbsp</label>
                                <input type="text" class="form_input" wire:model="hsc_board" placeholder="Board">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">&nbsp</label>
                                <input type="date" class="form_input" wire:model="hsc_date" placeholder="">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="number" class="form_input" wire:model="hsc_percentage" placeholder="Percentage">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="file" class="form_input" wire:model="hsc_file" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable"><b>Diploma</b></label>
                                <input type="text" class="form_input" wire:model="diploma_institution" placeholder="Institution">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">&nbsp</label>
                                <input type="text" class="form_input" wire:model="diploma_board" placeholder="Board">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">&nbsp</label>
                                <input type="date" class="form_input" wire:model="diploma_date" wire:model="" placeholder="">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="number" class="form_input" wire:model="diploma_percentage" placeholder="Percentage">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="file" class="form_input" wire:model="diploma_file" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable"><b>Bachelor's Degree
                                </b></label>
                                <input type="text" class="form_input"  wire:model="bachelor_intitution" placeholder="Institution">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">&nbsp</label>
                                <input type="text" class="form_input" wire:model="bachelor_board" placeholder="Board">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">&nbsp</label>
                                <input type="date" class="form_input" wire:model="bachelor_date" wire:model="" placeholder="">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="number" class="form_input" wire:model="bachelor_percentage" placeholder="Percentage">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="file" class="form_input" wire:model="bachelor_file" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable"><b>Master's Degree</b></label>
                                <input type="text" class="form_input" wire:model="master_institution" placeholder="Institution">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">&nbsp</label>
                                <input type="text" class="form_input" wire:model="master_board" placeholder="Board">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">&nbsp</label>
                                <input type="date" class="form_input" wire:model="master_date" placeholder="">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="number" class="form_input" wire:model="master_percentage" placeholder="Percentage">
                            </div>
                            <div class="col-sm-2">
                                <label>&nbsp</label>
                                <input type="file" class="form_input" wire:model="master_file" placeholder="Enter Name">
                            </div>
                        </div>
                        {{-- ==================Experience========================= --}}
                        <h5 class="text-left p-1"><b>Experience</b></h5>
                        <div class="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label id="lable">Employer Name</label>
                                    <input type="text" class="form_input" wire:model="employer_name.0" placeholder="Employer Name">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Designation</label>
                                    <input type="text" class="form_input" wire:model="employer_desigination.0" placeholder="Designation">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">From</label>
                                    <input type="date" class="form_input" wire:model="employer_from.0" placeholder="">
                                </div>
                                <div class="col-sm-3">
                                    <label>To</label>
                                    <input type="date" class="form_input" wire:model="employer_to.0" placeholder="Percentage">
                                </div>
                                <div class="col-sm-9">
                                    <label id="lable">Reason For Leaving</label>
                                    <input type="text" class="form_input" wire:model="employer_leave_reason.0" placeholder="Reason For Leaving">
                                </div>
                                <div class="col-sm-2">
                                    <label id="lable">Annual CTC</label>
                                    <input type="number" class="form_input" wire:model="employer_ctc.0" placeholder="">
                                </div>
                                <div class="col-sm-1">
                                    <label>&nbsp</label>
                                    <button type="button" style="margin-top:34px;"  wire:click="addDiv({{$i}})" name="add" id="add" class="btn btn-success">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="">

                            <div class="row">
                                @foreach($inputs as $key => $value)
                                <div class="col-sm-3">
                                    <label id="lable">Employer Name</label>
                                    <input type="text" class="form_input" wire:model="employer_name.{{$key+1}}" placeholder="Employer Name">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Designation</label>
                                    <input type="text" class="form_input" wire:model="employer_desigination.{{$key+1}}" placeholder="Designation">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">From 1</label>
                                    <input type="date" class="form_input" wire:model="employer_from.{{$key+1}}" placeholder="">
                                </div>
                                <div class="col-sm-3">
                                    <label>To1</label>
                                    <input type="date" class="form_input" wire:model="employer_to.{{$key+1}}" placeholder="Percentage">
                                </div>
                                <div class="col-sm-9">
                                    <label id="lable">Reason For Leaving 1</label>
                                    <input type="text" class="form_input" wire:model="employer_leave_reason.{{$key+1}}" placeholder="Reason For Leaving">
                                </div>
                                <div class="col-sm-2">
                                    <label id="lable">Annual CTC 1</label>
                                    <input type="number" class="form_input" wire:model="employer_ctc.{{$key+1}}"  placeholder="">
                                </div>
                                <div class="col-sm-1">
                                    <label>&nbsp</label>
                                    @if ($i>0)
                                    <button type="button" style="margin-top:34px;"  wire:click="removeDiv({{$i}})" name="remove" id="remove" class="btn btn-danger">x</button>
                                    @endif
                                </div>
                                @endforeach
                                <div class="col-sm-4">
                                    <label id="lable">Experience Letter</label>
                                    <input type="file" class="form_input" wire:model="experience_letter">
                                </div>
                                <div class="col-sm-4">
                                    <label id="lable">LAST 3 MONTH PAYSLIP</label>
                                    <input type="file" class="form_input" wire:model="pay_slip">
                                </div>
                                <div class="col-sm-4">
                                    <label id="lable">Resume</label>
                                    <input type="file" class="form_input" wire:model="resume">
                                </div>
                            </div>

                        </div>
                        <div class="row">

                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-2">
                                <input type="button" name="next" class="previous action-button" wire:click="basic()" value="previous" >
                            </div>
                            <div class="col-sm-8"></div>
                            <div class="col-sm-2">
                                <input type="button" name="next" class="next action-button" wire:click="education_next()" value="Next" >
                            </div>
                        </div>
                    </fieldset>
                @endif
                {{-- ==================Identification Proofs========================= --}}

                @if ($status == 3)
                    <fieldset>

                        <div class="">
                            <h5 class="text-left p-1"><b>Identification & Proofs</b></h5>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label id="lable">Aadhar Number</label>
                                    <input type="number" class="form_input" wire:model="aadhar_number" placeholder="Aadhar Number">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Aadhar Copy</label>
                                    <input type="file" class="form_input" wire:model="aadhar_file" placeholder="Aadhar Copy">
                                </div>
                                <div class="col-sm-3">
                                    <label>PAN Number</label>
                                    <input type="number" class="form_input" wire:model="pan_number" placeholder="PAN Number">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">PAN Copy</label>
                                    <input type="file" class="form_input" wire:model="pan_file" placeholder="Aadhar Number">
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label id="lable">Driving License Number</label>
                                <input type="text" class="form_input" wire:model="license_number" placeholder="Driving License Number">
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Valid Up to</label>
                                <input type="date" class="form_input" wire:model="license_valid" placeholder="">
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Driving License Copy</label>
                                <input type="file" class="form_input" wire:model="license_file" placeholder="Enter Email">
                            </div>
                        </div>
                        <h5 class="text-left p-1"><b>Bank Details</b></h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label id="lable">Bank Name</label>
                                    <input type="name" class="form_input" wire:model="bank_name" placeholder="Bank Name">
                                </div>
                                <div class="col-sm-4">
                                    <label id="lable">Branch Name</label>
                                    <input type="name" class="form_input" wire:model="branch_name" placeholder="Branch Name">
                                </div>
                                <div class="col-sm-4">
                                    <label id="lable">Account Number</label>
                                    <input type="name" class="form_input" wire:model="account_number" placeholder="Account Number">
                                </div>

                                <div class="col-sm-6">
                                    <label id="lable">IFSC Code</label>
                                    <input type="text" class="form_input" wire:model="ifsc_code" placeholder="IFSC Code">
                                </div>
                                <div class="col-sm-6">
                                    <label>Passbook Front Page Copy</label>
                                    <input type="file" class="form_input" wire:model="passbook_file" placeholder="Passbook Front Page Copy">
                                </div>
                                <div class="col-sm-2">
                                    <input type="button" name="next" class="previous action-button" wire:click="education()" value="previous" >
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-2">
                                    <input type="button" name="next" class="next action-button" wire:click="identification_next()" value="Next" >
                                </div>
                            </div>
                        </div>
                    </fieldset>
                @endif
            {{-- Offece Details --}}
                @if($status == 4)
                    <fieldset>
                        <h5 class="text-left p-1"><b>Office Details</b></h5>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable">Emp ID</label>
                                <select name="" class="form_input" wire:model="emp_id" id="">
                                    <option value="CONC">CONC</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Emp Code</label>
                                <input type="text" class="form_input" wire:model="emp_code" placeholder="Emp Code">
                            </div>
                            <div class="col-sm-3">
                                <label>DOJ</label>
                                <input type="date" class="form_input" wire:model="employee_doj" placeholder="">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Division</label>
                                <select name="" class="form_input" wire:model="employee_division" id="">
                                    <option value="">-- Select Division--</option>
                                    <option value="Division">Division</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label id="lable">Designation</label>
                                <select name="" class="form_input" wire:model="employee_designation" id="">
                                    <option value="">-- Select Designation--</option>
                                    <option value="Designation">Designation</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Reporting To</label>
                                <select name="" class="form_input" wire:model="employee_report_to" id="">
                                    <option value="">-- Select Report--</option>
                                    <option value="test">test</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Employment Type</label>
                                <select name="" class="form_input" wire:model="employement_type" id="">
                                    <option value selected disabled>Select Employment Type</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract Basis</option>
                                    <option value="Probation">Probation</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Employment Status</label>
                                <select name="" class="form_input" wire:model="employement_status" id="">
                                    <option value selected disabled>Select Employment Status</option>
                                    <option value="Active">On-Duty</option>
                                    <option value="On-Leave">On-Leave</option>
                                    <option value="Absconded">Absconded</option>
                                    <option value="Terminated">Terminated</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Employee Access</label>
                                <select name="" class="form_input" wire:model="employee_access" id="">
                                    <option value="0" selected value disabled>Select Control</option>
                                    <option value="5">Admin</option>
                                    <option value="3">Project Manager</option>
                                    <option value="4">Human Resource</option>
                                    <option value="1">General</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="text-left p-1"><b>Skils</b></h5>
                        <div class="row">
                            <div class="col-sm-4">
                                <label id="lable">Employee Skills</label>
                                <select name="" class="form_input" wire:model="skills1" id="">
                                    <option value="0" selected value disabled>Select Skils</option>
                                    <option value="Skill1">Skill1</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Employee Skills</label>
                                <select name="" class="form_input" wire:model="skills2" id="">
                                    <option value="0" selected value disabled>Select Skils</option>
                                    <option value="Skill1">Skill2</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Employee Skills</label>
                                <select name="" class="form_input" wire:model="skills3" id="">
                                    <option value="0" selected value disabled>Select Skils</option>
                                    <option value="Skill1">Skill3</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="text-left p-1"><b>Professional References</b></h5>
                        <div class="">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label id="lable">Name</label>
                                    <input type="text" class="form_input" wire:model="reference_name.0" placeholder="Name">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Organisation</label>
                                    <input type="text" class="form_input" wire:model="reference_organisation.0" placeholder="Organisation">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Designation</label>
                                    <input type="text" class="form_input" wire:model="reference_designation.0" placeholder="Name">
                                </div>
                                <div class="col-sm-2">
                                    <label id="lable">Phone</label>
                                    <input type="text" class="form_input" wire:model="reference_phone.0" placeholder="Phone">
                                </div>
                                <div class="col-sm-1">
                                    <label id="lable">&nbsp</label>
                                    <button type="button" style="margin-top:34px;"  wire:click="addDiv2({{$i2}})" name="add2" id="add2" class="btn btn-success">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            @foreach($inputs2 as $key2 => $value2)
                            <div class="row">
                                <div class="col-sm-3">
                                    <label id="lable">Name</label>
                                    <input type="text" class="form_input" wire:model="reference_name.{{$key2+1}}" placeholder="Name">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Organisation</label>
                                    <input type="text" class="form_input" wire:model="reference_organisation.{{$key2+1}}" placeholder="Organisation">
                                </div>
                                <div class="col-sm-3">
                                    <label id="lable">Designation</label>
                                    <input type="text" class="form_input" wire:model="reference_designation.{{$key2+1}}" placeholder="Name">
                                </div>
                                <div class="col-sm-2">
                                    <label id="lable">Phone</label>
                                    <input type="text" class="form_input" wire:model="reference_phone.{{$key2+1}}" placeholder="Phone">
                                </div>
                                <div class="col-sm-1">
                                    <label id="lable">&nbsp</label>
                                    @if ($i2>0)
                                    <button type="button" style="margin-top:34px;"  wire:click="removeDiv2({{$i2}})" name="remove" id="remove" class="btn btn-danger">x</button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <h5 class="text-left p-1"><b>Compensation</b></h5>
                        <div class="row">
                            <div class="col-sm-2">
                                <label id="lable">Basic</label>
                                <input type="text" class="form_input" wire:model="compensation_basic" placeholder="Basic">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">HRA</label>
                                <input type="text" class="form_input" wire:model="compensation_hra" placeholder="HRA">
                            </div>
                            <div class="col-sm-2">
                                <label id="lable">Other Allowances</label>
                                <input type="text" class="form_input" wire:model="compensation_other_allowances" placeholder="Other Allowances">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">CTC</label>
                                <input type="text" class="form_input" wire:model="compensation_ctc" placeholder="CTC">
                            </div>
                            <div class="col-sm-3">
                                <label id="lable">Cost/Hr</label>
                                <input type="number" class="form_input" wire:model="compensation_cost_hr" placeholder= "Cost/Hr">
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Profile Picture</label>
                                <input type="file" class="form_input" wire:model="profile_picture">
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Offer Letter</label>
                                <input type="file" class="form_input" wire:model="offer_letter">
                            </div>
                            <div class="col-sm-4">
                                <label id="lable">Transfer Letter</label>
                                <input type="file" class="form_input" wire:model.defer="transfer_letter">
                                @error('transfer_letter') <span class="error text-danger">{{ $message}}</span> @enderror
                            </div>
                            <div class="col-sm-2">
                                <input type="button" name="next" class="previous action-button" wire:click="identification()" value="previous" >
                            </div>
                            <div class="col-sm-8"></div>
                            <div class="col-sm-2">
                                <input type="button" name="submit" class="submit action-button" wire:click.prevent="update_employee()" value="Submit" />
                            </div>
                        </div>
                        {{-- <div class="row mt-3">

                        </div> --}}
                    </fieldset>
                @endif
        </form>
</div>

