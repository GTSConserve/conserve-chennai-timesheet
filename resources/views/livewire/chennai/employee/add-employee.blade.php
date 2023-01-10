<div>
   
      
    <div class="page-header">
        <div class="page-title">
            <h3><b>Add Employee</b></h3>
        </div>
    </div>
  
    <form id="msform">
        <!-- progressbar -->
      
        <ul id="progressbar">
            <li class="{{$role}}">Role and Desigination</li>
            <li class="{{$basic_active}}">Basic Details</li>
            <li class="{{$education_active}}">Education</li>
            <li class="{{$identification_active}}">Identification </li>
            <li class="{{$offical_active}}">Offical</li>
        </ul>
      
        @if ($status == 0)
        
        <fieldset>
         
            <h5 class="text-left p-1"><b>Role and Designation</b></h5>
            
            <div class="row">
             
                <div class="col-sm-3">
                    <label id="Department">Employee Department</label>
                    <select name="" id="" class="form_input" wire:model="department">
                        <option value=""> Select Employee Department </option>
                        @foreach ($user_group_departments as $user_group_department )
                        <option value="{{$user_group_department->id}}">{{$user_group_department->name}} </option>
                        @endforeach
                    </select>
                    @error('department')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
             
                @if($department&&($department!=5&&$department!=6))
                <div class="col-sm-3">
                    <label id="experience">Employee Experience</label>
                    <select name="" id="" class="form_input" wire:model="experience">
                        <option value=""> Select Employee Experience </option>
                        @foreach ($user_group_experiences as $user_group_experience )
                        <option value="{{$user_group_experience->id}}">{{$user_group_experience->name}} </option>
                        @endforeach
                    </select>
                    @error('experience')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label id="division">Employee Division</label>
                    <select name="" class="form_input" wire:model="division" id="">
                        <option value="">Select Employee Division</option>
                        @foreach ($user_group_divisions as $groups)
                        <option value="{{$groups->id}}">{{$groups->name}}</option>
                        @endforeach
                    </select>
                    @error('division')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label id="division">Employee Shift</label>
                    <select name="" class="form_input" wire:model="shift" id="">
                        <option value="">Select Employee Shift</option>
                        @foreach ($user_shift as $shif)
                        <option value="{{$shif->id}}">{{$shif->shift}}</option>
                        @endforeach
                    </select>
                    @error('shift')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                @endif
              
                @if(($department!=5&&$department!=6)&&$user_group_desiginations)
                <div class="col-sm-3">
                    <label id="designation">Employee Designation</label>
                    <select name="" id="" class="form_input" wire:model="designation">
                        <option value=""> Select Employee Designation </option>
                        @foreach ($user_group_desiginations as $user_group_desigination )
                        @if($user_group_desigination->name!='Director')
                        <option value="{{$user_group_desigination->id}}">{{$user_group_desigination->name}} </option>
                        @endif
                        @endforeach
                    </select>
                    @error('designation')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                @endif
           
                @if($experience||$department==5||$department==6)
                <div class="col-sm-3">
                    <label id="category">Employee Category</label>
                    {{-- <select name="" id="" class="form_input" wire:model="category">
                        <option value=""> Select Employee Category </option>
                        @foreach ($user_group_categories as $user_group_category )
                        <option value="{{$user_group_category->id}}">{{$user_group_category->type}} -
                            {{$user_group_category->name}} </option>
                        @endforeach

                    </select> --}}
                    <p class="form_input text-success">{{$category_name}} </p>
                    @error('category')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>

                

                @if($department!=5&&$department!=6)
                <div class="col-sm-3">
                    <label id="grade">Employee Grade</label>
                    <select name="" id="" class="form_input" wire:model="grade">
                        <option value=""> Select Employee Grade </option>
                        @foreach ($user_group_grades as $user_group_grade )
                        <option value="{{$user_group_grade->id}}">{{$user_group_grade->name}} </option>
                        @endforeach
                    </select>
                    @error('grade')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                @endif
                @if($experience&&$department!=5)
                
                @if($designation&&$department==1&&$grade)
                @include('livewire.chennai.employee.eng-reporting-employee')
                @endif
                @if($designation&&$department==2&&$grade)
                @include('livewire.chennai.employee.admin-reporting-employee')
                @endif
       
                @endif
                @endif


            </div>
            <div class="row mt-3">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" class="next action-button" wire:click="role_next()" value="Next">
                </div>
            </div>
        </fieldset>
        @endif
        {{--================BAsic Details=========================== --}}
        @if ($status == 1)
        <fieldset>
            <h5 class="text-left p-1"><b>Basic Details</b></h5>
            <div class="row">
                <div class="col-sm-3">
                    <label id="first_name">First Name</label>
                    <input type="text" class="form_input" wire:model="first_name" placeholder="First Name">
                    @error('first_name')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label >Last Name</label>
                    <input type="text" class="form_input" wire:model="last_name" placeholder="Last Name">
                </div>
                <div class="col-sm-3">
                    <label >Gender</label>
                    <select name="" id="" class="form_input" wire:model="gender">
                        <option value="">-Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    @error('gender')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label>Date Of Birth (In certificate)</label>
                    <input type="date" class="form_input" wire:model="certificate_dob" placeholder="Enter Name">
                    @error('certificate_dob')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label >Date Of Birth (Original)</label>
                    <input type="date" class="form_input" wire:model="orginal_dob" placeholder="">
                    @error('orginal_dob')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label >Marital Status</label>
                    <select class="form_input" wire:model="marital_status">
                        <option value="">Select Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                    @error('marital_status')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label >User Name</label>
                    <input type="Email" class="form_input" wire:model="user_name" placeholder="Enter Email">
                    @error('user_name')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label>Phone No</label>
                    <input type="text" class="form_input" wire:model="phone_number" placeholder="Enter Phone">
                    @error('phone_number')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label >Official E-mail</label>
                    <input type="email" class="form_input" wire:model="offical_email" placeholder="Official E-Mail">
                    @error('offical_email')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label >Personal E-Mail</label>
                    <input type="email" class="form_input" wire:model="personal_email" placeholder="Personal E-Mail">
                    @error('personal_email')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label >Nationality</label>
                    <input type="Email" class="form_input" wire:model="nationality" placeholder="Nationality">
                    @error('nationality')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label>Alternative Phone No</label>
                    <input type="text" class="form_input" wire:model="alter_phone_number" placeholder="Enter Phone">
                    @error('alter_phone_number')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{--================Personal Details=========================== --}}
            <h5 class="text-left p-1"><b>Personal Details</b></h5>
            <div class="row">
                <div class="col-sm-6">
                    <label >Father’s / Spouse Name</label>
                    <input type="Email" class="form_input" wire:model="father_name"
                        placeholder="Father’s / Spouse Name">
                </div>
                <div class="col-sm-6">
                    <label>Blood Group</label>
                    <input type="text" class="form_input" wire:model="blood_group" placeholder="Blood Group">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label >Residential Address <input type="checkbox"></label>
                    <textarea name="" class="form_input" wire:model="residential_address" id="" cols="30"
                        rows="2"></textarea>
                </div>
                <div class="col-sm-6">
                    <label>Permanent Address</label>
                    <textarea name="" class="form_input" wire:model="permenente_address" id="" cols="30"
                        rows="2"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label >Emergency Contact</label>
                    <input type="Email" class="form_input" wire:model="emergency_contact_name" placeholder="Name">
                </div>
                <div class="col-sm-4">
                    <label>Relation</label>
                    <input type="text" class="form_input" wire:model="emergency_contact_relation"
                        placeholder="Relation">
                </div>
                <div class="col-sm-4">
                    <label>Contact Number</label>
                    <input type="text" class="form_input" wire:model="emergency_contact_number"
                        placeholder="Phone Number">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-2">
                    <input type="button" name="next" class="previous action-button" wire:click="role()"
                        value="previous">
                </div>
                <div class="col-sm-2">
                    <input type="button" class="next action-button" wire:click="basic_next()" value="Next">
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
                    <label ><b>SSLC</b></label>
                    <input type="text" class="form_input" wire:model="sslc_institution" placeholder="Institution">
                </div>
                <div class="col-sm-3">
                    <label >&nbsp</label>
                    <input type="text" class="form_input" wire:model="sslc_board" placeholder="Board">
                </div>
                <div class="col-sm-2">
                    <label >&nbsp</label>
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
                    <label ><b>HSC</b></label>
                    <input type="text" class="form_input" wire:model="hsc_institution" placeholder="Institution">
                </div>
                <div class="col-sm-3">
                    <label >&nbsp</label>
                    <input type="text" class="form_input" wire:model="hsc_board" placeholder="Board">
                </div>
                <div class="col-sm-2">
                    <label >&nbsp</label>
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
                    <label ><b>Diploma</b></label>
                    <input type="text" class="form_input" wire:model="diploma_institution" placeholder="Institution">
                </div>
                <div class="col-sm-3">
                    <label >&nbsp</label>
                    <input type="text" class="form_input" wire:model="diploma_board" placeholder="Board">
                </div>
                <div class="col-sm-2">
                    <label >&nbsp</label>
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
                    <label ><b>Bachelor's Degree
                        </b></label>
                    <input type="text" class="form_input" wire:model="bachelor_intitution" placeholder="Institution">
                </div>
                <div class="col-sm-3">
                    <label >&nbsp</label>
                    <input type="text" class="form_input" wire:model="bachelor_board" placeholder="Board">
                </div>
                <div class="col-sm-2">
                    <label >&nbsp</label>
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
                    <label ><b>Master's Degree</b></label>
                    <input type="text" class="form_input" wire:model="master_institution" placeholder="Institution">
                </div>
                <div class="col-sm-3">
                    <label >&nbsp</label>
                    <input type="text" class="form_input" wire:model="master_board" placeholder="Board">
                </div>
                <div class="col-sm-2">
                    <label >&nbsp</label>
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
                        <label >Employer Name</label>
                        <input type="text" class="form_input" wire:model="employer_name.0" placeholder="Employer Name">
                    </div>
                    <div class="col-sm-3">
                        <label >Designation</label>
                        <input type="text" class="form_input" wire:model="employer_desigination.0"
                            placeholder="Designation">
                    </div>
                    <div class="col-sm-3">
                        <label >From</label>
                        <input type="date" class="form_input" wire:model="employer_from.0" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label>To</label>
                        <input type="date" class="form_input" wire:model="employer_to.0" placeholder="Percentage">
                    </div>
                    <div class="col-sm-9">
                        <label >Reason For Leaving</label>
                        <input type="text" class="form_input" wire:model="employer_leave_reason.0"
                            placeholder="Reason For Leaving">
                    </div>
                    <div class="col-sm-2">
                        <label >Annual CTC</label>
                        <input type="number" class="form_input" wire:model="employer_ctc.0" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <label>&nbsp</label>
                        <button type="button" style="margin-top:34px;" wire:click="addDiv({{$i}})" name="add" id="add"
                            class="btn btn-success">+</button>
                    </div>
                </div>
            </div>
            <div class="">

                <div class="row">
                    @foreach($inputs as $key => $value)
                    <div class="col-sm-3">
                        <label >Employer Name 1</label>
                        <input type="text" class="form_input" wire:model="employer_name.{{$key+1}}"
                            placeholder="Employer Name">
                    </div>
                    <div class="col-sm-3">
                        <label >Designation 1</label>
                        <input type="text" class="form_input" wire:model="employer_desigination.{{$key+1}}"
                            placeholder="Designation">
                    </div>
                    <div class="col-sm-3">
                        <label >From 1</label>
                        <input type="date" class="form_input" wire:model="employer_from.{{$key+1}}" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label>To1</label>
                        <input type="date" class="form_input" wire:model="employer_to.{{$key+1}}"
                            placeholder="Percentage">
                    </div>
                    <div class="col-sm-9">
                        <label >Reason For Leaving 1</label>
                        <input type="text" class="form_input" wire:model="employer_leave_reason.{{$key+1}}"
                            placeholder="Reason For Leaving">
                    </div>
                    <div class="col-sm-2">
                        <label >Annual CTC 1</label>
                        <input type="number" class="form_input" wire:model="employer_ctc.{{$key+1}}" placeholder="">
                    </div>
                    <div class="col-sm-1">
                        <label>&nbsp</label>
                        @if ($i>0)
                        <button type="button" style="margin-top:34px;" wire:click="removeDiv({{$i}})" name="remove"
                            id="remove" class="btn btn-danger">x</button>
                        @endif
                    </div>
                    @endforeach
                    <div class="col-sm-4">
                        <label >Experience Letter</label>
                        <input type="file" class="form_input" wire:model="experience_letter">
                    </div>
                    <div class="col-sm-4">
                        <label >LAST 3 MONTH PAYSLIP</label>
                        <input type="file" class="form_input" wire:model="pay_slip">
                    </div>
                    <div class="col-sm-4">
                        <label >Resume</label>
                        <input type="file" class="form_input" wire:model="resume">
                    </div>
                </div>

            </div>
            <div class="row">

            </div>
            <div class="row mt-3">
                <div class="col-sm-2">
                    <input type="button" name="next" class="previous action-button" wire:click="basic()"
                        value="previous">
                </div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="next action-button" wire:click="education_next()"
                        value="Next">
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
                        <label >Aadhar Number</label>
                        <input type="number" class="form_input" wire:model="aadhar_number" placeholder="Aadhar Number">
                        @error('aadhar_number')
                        <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <label >Aadhar Copy</label>
                        <input type="file" class="form_input" wire:model="aadhar_file" placeholder="Aadhar Copy">
                    </div>
                    <div class="col-sm-3">
                        <label>PAN Number</label>
                        <input type="text" class="form_input" wire:model="pan_number" placeholder="PAN Number">
                        @error('pan_number')
                        <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <label >PAN Copy</label>
                        <input type="file" class="form_input" wire:model="pan_file" placeholder="Aadhar Number">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <label >Driving License Number</label>
                        <input type="text" class="form_input" wire:model="license_number"
                            placeholder="Driving License Number">
                    </div>
                    <div class="col-sm-4">
                        <label >Valid Up to</label>
                        <input type="date" class="form_input" wire:model="license_valid" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label >Driving License Copy</label>
                        <input type="file" class="form_input" wire:model="license_file" placeholder="Enter Email">
                    </div>
                </div>
                <h5 class="text-left p-1"><b>Bank Details</b></h5>
                <div class="row">
                    <div class="col-sm-4">
                        <label >Bank Name</label>
                        <input type="name" class="form_input" wire:model="bank_name" placeholder="Bank Name">
                    </div>
                    <div class="col-sm-4">
                        <label >Branch Name</label>
                        <input type="name" class="form_input" wire:model="branch_name" placeholder="Branch Name">
                    </div>
                    <div class="col-sm-4">
                        <label >Account Number</label>
                        <input type="name" class="form_input" wire:model="account_number" placeholder="Account Number">
                    </div>

                    <div class="col-sm-6">
                        <label >IFSC Code</label>
                        <input type="text" class="form_input" wire:model="ifsc_code" placeholder="IFSC Code">
                    </div>
                    <div class="col-sm-6">
                        <label>Passbook Front Page Copy</label>
                        <input type="file" class="form_input" wire:model="passbook_file"
                            placeholder="Passbook Front Page Copy">
                    </div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="previous action-button" wire:click="education()"
                            value="previous">
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="identification_next()"
                            value="Next">
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
                    <label >Emp ID</label>
                    <select name="" class="form_input" wire:model="emp_id" id="">
                        <option>--Select--</option>
                        <option value="CONIN">CONIN</option>
                    </select>
                    @error('emp_id')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label >Emp Code</label>
                    <input type="text" class="form_input" wire:model="emp_code" placeholder="Emp Code">
                    @error('emp_code')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label>DOJ</label>
                    <input type="date" class="form_input" wire:model="employee_doj" placeholder="">
                    @error('employee_doj')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="col-sm-3">
                    <label >Division</label>
                    <select name="" class="form_input" wire:model="employee_division" id="">
                        <option value="">-- Select Division--</option>
                        <option value="Division">Division</option>
                    </select>
                    @error('employee_division')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div> --}}
            </div>
            <div class="row">
                {{-- <div class="col-sm-3">
                    <label >Designation</label>
                    <select name="" class="form_input" wire:model="employee_designation" id="">
                        <option value="">-- Select Designation--</option>
                        <option value="Designation">Designation</option>
                    </select>
                    @error('employee_designation')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="col-sm-3" wire:ignore>
                    <label >Employee Week Off</label>
                    <select name="" class="form_input" style="display:none"id="week_off" wire:model="week_off" multiple="multiple">
                      
                        @foreach ($user_week_off as $week)
                        <option value="{{$week->id}}">{{$week->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <label >Employment Type</label>
                    <select name="" class="form_input" wire:model="employement_type" id="">
                        <option value="">Select Employment Type</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract Basis</option>
                        <option value="Probation">Probation</option>
                    </select>
                    @error('employement_type')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    <label >Employment Status</label>
                    <select name="" class="form_input" wire:model="employement_status" id="">
                        <option value="">Select Employment Status</option>
                        <option value="Active">On-Duty</option>
                        <option value="On-Leave">On-Leave</option>
                        <option value="Absconded">Absconded</option>
                        <option value="Terminated">Terminated</option>
                    </select>
                    @error('employement_status')
                    <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <h5 class="text-left p-1"><b>Skils</b></h5>
            <div class="row">
                <div class="col-sm-4">
                    <label >Employee Skills</label>
                    <select name="" class="form_input" wire:model="skills1" id="">
                        <option value="0" selected value disabled>Select Skils</option>
                        <option value="Skill1">Skill1</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label >Employee Skills</label>
                    <select name="" class="form_input" wire:model="skills2" id="">
                        <option value="0" selected value disabled>Select Skils</option>
                        <option value="Skill1">Skill2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label >Employee Skills</label>
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
                        <label >Name</label>
                        <input type="text" class="form_input" wire:model="reference_name.0" placeholder="Name">
                    </div>
                    <div class="col-sm-3">
                        <label >Organisation</label>
                        <input type="text" class="form_input" wire:model="reference_organisation.0"
                            placeholder="Organisation">
                    </div>
                    <div class="col-sm-3">
                        <label >Designation</label>
                        <input type="text" class="form_input" wire:model="reference_designation.0" placeholder="Name">
                    </div>
                    <div class="col-sm-2">
                        <label >Phone</label>
                        <input type="text" class="form_input" wire:model="reference_phone.0" placeholder="Phone">
                    </div>
                    <div class="col-sm-1">
                        <label >&nbsp</label>
                        <button type="button" style="margin-top:34px;" wire:click="addDiv2({{$i2}})" name="add2"
                            id="add2" class="btn btn-success">+</button>
                    </div>
                </div>
            </div>
            <div class="">
                @foreach($inputs2 as $key2 => $value2)
                <div class="row">
                    <div class="col-sm-3">
                        <label >Name</label>
                        <input type="text" class="form_input" wire:model="reference_name.{{$key2+1}}"
                            placeholder="Name">
                    </div>
                    <div class="col-sm-3">
                        <label >Organisation</label>
                        <input type="text" class="form_input" wire:model="reference_organisation.{{$key2+1}}"
                            placeholder="Organisation">
                    </div>
                    <div class="col-sm-3">
                        <label >Designation</label>
                        <input type="text" class="form_input" wire:model="reference_designation.{{$key2+1}}"
                            placeholder="Name">
                    </div>
                    <div class="col-sm-2">
                        <label >Phone</label>
                        <input type="text" class="form_input" wire:model="reference_phone.{{$key2+1}}"
                            placeholder="Phone">
                    </div>
                    <div class="col-sm-1">
                        <label >&nbsp</label>
                        @if ($i2>0)
                        <button type="button" style="margin-top:34px;" wire:click="removeDiv2({{$i2}})" name="remove"
                            id="remove" class="btn btn-danger">x</button>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <h5 class="text-left p-1"><b>Compensation</b></h5>
            <div class="row">
                <div class="col-sm-2">
                    <label >Basic</label>
                    <input type="text" class="form_input" wire:model="compensation_basic" placeholder="Basic">
                </div>
                <div class="col-sm-2">
                    <label >HRA</label>
                    <input type="text" class="form_input" wire:model="compensation_hra" placeholder="HRA">
                </div>
                <div class="col-sm-2">
                    <label >Other Allowances</label>
                    <input type="text" class="form_input" wire:model="compensation_other_allowances"
                        placeholder="Other Allowances">
                </div>
                <div class="col-sm-3">
                    <label >CTC</label>
                    <input type="text" class="form_input" wire:model="compensation_ctc" placeholder="CTC">
                </div>
                <div class="col-sm-3">
                    <label >Cost/Hr</label>
                    <input type="number" class="form_input" wire:model="compensation_cost_hr" placeholder="Cost/Hr">
                </div>
                <div class="col-sm-4">
                    <label >Profile Picture</label>
                    <input type="file" class="form_input" wire:model="profile_picture">
                </div>
                <div class="col-sm-4">
                    <label >Offer Letter</label>
                    <input type="file" class="form_input" wire:model="offer_letter">
                </div>
                <div class="col-sm-4">
                    <label >Transfer Letter</label>
                    <input type="file" class="form_input" wire:model.defer="transfer_letter">
                    @error('transfer_letter') <span class="error text-danger">{{ $message}}</span> @enderror
                </div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="previous action-button" wire:click="identification()"
                        value="previous">
                </div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <input type="button" name="submit" class="submit action-button" wire:click="add_employee()"
                        value="Submit" />
                </div>
            </div>
            {{-- <div class="row mt-3">

            </div> --}}
        </fieldset>
        @endif
    </form>
</div>


    @push('js')
<script>

    $(function(){
      $('#week_off').select2({
        theme:'bootstrap4',
        placeholder:'Select Employee Week-Off'
      }).on('change',function(){
        @this.set('week_off',$(this).val())
      });
    })

    </script>
@endpush