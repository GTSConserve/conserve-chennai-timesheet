<div>
    <div class="">
        <div class="page-header">
            <div class="page-title">
                <div class="text-left">
                    <h3 >View Employee</h3>
                </div>
            </div>
            <button class="btn btn-warning" ><a href="{{Route('super-admin-all-employee')}}">Back</a></button>
        </div>
        {{-- <div class="layout-px-spacing"> --}}
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="widget-box m-b10"  style="padding: 10px;border: none;">
                            <div class="widget-inner">
                                <div class="card-courses-list admin-courses">
                                    <div class="row">
                                        <div class="card-courses-media col-2">
                                                <img src="https://png.pngtree.com/png-vector/20190411/ourmid/pngtree-business-male-icon-vector-png-image_916468.jpg" class="mx-3 mt-2" style="height:150px;" alt="">
                                        </div>
                                        <div class="col-9" >
                                            <h2 class="mt-3" style="color: #000;font-size: 30px;font-weight: 700;">{{$view_employee_list->first_name." ".$view_employee_list->last_name}}</h2>
                                            <p class="" style="color:#00A3BF">{{$view_employee_list->phone_no}}</p>
                                            <p class="" style="color:#00A3BF">{{$view_employee_list->offical_mail}}</p>
                                            <p class="" style="color:#00A3BF">{{$view_employee_list->designation}}</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="row mb-4">
                                <div class="col-sm-2 col-12 ">
                                    <div class="">
                                        <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="rounded-vertical-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="rounded-vertical-pills-home-tab" data-toggle="pill" href="#rounded-vertical-pills-home" role="tab" aria-controls="rounded-vertical-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>&nbsp</svg>Basic</a>
                                            <a class="nav-link mb-2" id="rounded-vertical-pills-profile-tab" data-toggle="pill" href="#rounded-vertical-pills-profile" role="tab" aria-controls="rounded-vertical-pills-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Documents</a>
                                            <a class="nav-link mb-2" id="rounded-vertical-pills-messages-tab" data-toggle="pill" href="#rounded-vertical-pills-messages" role="tab" aria-controls="rounded-vertical-pills-messages" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Personal </a>
                                            <a class="nav-link mb-2" id="rounded-vertical-pills-home-tab1" data-toggle="pill" href="#rounded-vertical-pills-home1" role="tab" aria-controls="rounded-vertical-pills-home1" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>Educational</a>
                                            <a class="nav-link mb-2" id="rounded-vertical-pills-profile-tab1" data-toggle="pill" href="#rounded-vertical-pills-profile1" role="tab" aria-controls="rounded-vertical-pills-profile1" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Employment</a>
                                            <a class="nav-link mb-2" id="rounded-vertical-pills-messages-tab1" data-toggle="pill" href="#rounded-vertical-pills-messages1" role="tab" aria-controls="rounded-vertical-pills-messages1" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>Bank</a>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-12">
                                    <div class="tab-content" id="rounded-vertical-pills-tabContent">
                                        <div class="tab-pane fade show active" id="rounded-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab">
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Employee Id</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->emp_code}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Date of Joining</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->doj}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Division</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->division}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Designation</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->designation}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Employment Type</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->employment_type}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Employment Status</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->employment_status}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Reporting To</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->reporting_to}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Father's Name</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->last_name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rounded-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-vertical-pills-profile-tab">

                                        </div>
                                        <div class="tab-pane fade" id="rounded-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-vertical-pills-messages-tab">
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Date of Birth (In certificate)</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->dob_certificate}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Date of Birth (Original)</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->dob_original}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Marriage Status</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->marital_status}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Nationality</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->nationality}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Father’s / Spouse Name</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->father_name}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Blood Group</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->blood_group}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Residential Address</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->residential_address}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Permanent Address</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->permanent_address}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Official Mail ID</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->offical_mail}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Personal Mail ID</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->personal_mail}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Alternate Contact No</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->alter_phone_no}}
                                                </div>
                                                <div class="col-sm-3">

                                                </div>
                                                <div class="col-sm-3">

                                                </div>
                                            </div>
                                        </div>
                                       <div class="tab-pane fade" id="rounded-vertical-pills-home1" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab1">
                                        <h5 style="color: #009688;"><b>SSLC Education</b></h5>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Institution</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->sslc_institution}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Percentage</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->sslc_percentage}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Board</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->sslc_board}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Year of Passed Out</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->sslc_date}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>File</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->employment_type}}
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>
                                        <h5 style="color: #009688;"><b>Higher Education</b></h5>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Institution</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->hsc_institution}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Percentage </b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->hsc_percentage}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Board</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->hsc_board}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Year of Passed Out</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->hsc_date}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>File</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->hsc_file}}
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>
                                        <h5 style="color: #009688;"><b>Diploma</b></h5>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Institution</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->diploma_percentage}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Percentage </b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->diploma_percentage}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Board</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->diploma_board}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Year of Passed Out</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->designation}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>File</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->employment_type}}
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>
                                        <h5 style="color: #009688;"><b>Bachelor</b></h5>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Institution</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->emp_id}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Percentage </b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->doj}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Board</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->division}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Year of Passed Out</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->designation}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>File</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->employment_type}}
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>
                                        <h5 style="color: #009688;background-color:azure"><b>Master</b></h5>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Institution</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->emp_id}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Percentage </b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->doj}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Board</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->division}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Year of Passed Out</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->designation}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>File</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_education_list->employment_type}}
                                            </div>
                                            <div class="col-sm-6">
                                            </div>
                                        </div>

                                       </div>
                                       <div class="tab-pane fade" id="rounded-vertical-pills-profile1" role="tabpanel" aria-labelledby="rounded-vertical-pills-profile-tab1">
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Employer Name</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->emp_id}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Designation</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->doj}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>From</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->division}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>To</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->designation}}
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 25px;">
                                            <div class="col-sm-3">
                                                <b>Reason For Leaving</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->employment_type}}
                                            </div>
                                            <div class="col-sm-3">
                                                <b>Annual CTC</b>
                                            </div>
                                            <div class="col-sm-3">
                                                {{$view_employee_list->employment_status}}
                                            </div>
                                        </div>
                                       </div>
                                       <div class="tab-pane fade" id="rounded-vertical-pills-messages1" role="tabpanel" aria-labelledby="rounded-vertical-pills-messages-tab1">
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Bank Name</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->emp_id}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Branch Name</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->doj}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Account Number</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->division}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>IFSC Code</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->designation}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 25px;">
                                                <div class="col-sm-3">
                                                    <b>Pan Number</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->employment_type}}
                                                </div>
                                                <div class="col-sm-3">
                                                    <b>Passbook Front Page Copy</b>
                                                </div>
                                                <div class="col-sm-3">
                                                    {{$view_employee_list->employment_status}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
