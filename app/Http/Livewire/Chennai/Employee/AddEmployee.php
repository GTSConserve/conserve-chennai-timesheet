<?php

namespace App\Http\Livewire\Chennai\Employee;
use App\Models\Employee;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Experience;
use App\Models\Bank;
use App\Models\Usergroup;
use App\Models\UsergroupCategories;
use App\Models\UsergroupDesigination;
use App\Models\UsergroupGrade;
use App\Models\UsergroupDepartment;
use App\Models\UsergroupExperience;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddEmployee extends Component
{
    use WithFileUploads;
    public $status=0;
    public $role="active";
    public $basic_active,$education_active,$identification_active,$offical_active;
    public $inputs = [];
    public $i=0;
    public $inputs2 = [];
    public $i2=0;
    public $employer_name=[],$employer_desigination=[],$employer_from=[],$employer_to=[],$employer_leave_reason=[],$employer_ctc=[];
    public $reference_name =[], $reference_organisation =[],$reference_designation =[],$reference_phone =[];
    // employee table
    public $first_name,$last_name,$gender,$certificate_dob,$orginal_dob,$marital_status,$user_name,$phone_number,$offical_email,$personal_email,$nationality,$alter_phone_number,$father_name,$blood_group,$residential_address,$permenente_address,$emergency_contact_name,$emergency_contact_relation,$emergency_contact_number,$experience_letter,$pay_slip,$resume,$aadhar_number,$aadhar_file,$pan_number,$pan_file,$license_number,$license_valid,$license_file,$emp_id,$emp_code,$employee_doj,$employee_division,$employee_designation,$employee_report_to,$employement_type,$employement_status,$employee_access,$skills1,$skills2,$skills3,$compensation_basic,$compensation_hra,$compensation_other_allowances,$compensation_ctc,$compensation_cost_hr,$profile_picture,$offer_letter,$transfer_letter;
    // Education table
    public $sslc_institution,$sslc_board,$sslc_date,$sslc_percentage,$sslc_file,$hsc_institution,$hsc_board,$hsc_date,$hsc_percentage,$hsc_file,$diploma_institution,$diploma_board,$diploma_date,$diploma_percentage,$diploma_file,$bachelor_intitution,$bachelor_board,$bachelor_date,$bachelor_percentage,$bachelor_file,$master_institution,$master_board,$master_date,$master_percentage,$master_file;
    // Bank Table
    public $bank_name,$branch_name,$account_number,$ifsc_code,$passbook_file;

    public $department,$category,$experience,$grade,$designation;

    public function basic(){
        $this->education_active = "";
        $this->status = 1;
    }
    public function education(){
        $this->education_active = "active";
        $this->status = 2;
        $this->identification_active = "";
    }
    public function identification(){
        $this->education_active = "active";
        $this->status = 3;
        $this->identification_active = "active";
        $this->offical_active = "";
    }
    public function basic_next(){
        $this->validate([
            'first_name' => 'required',
            'gender' => 'required',
            'certificate_dob' => 'required',
            'orginal_dob' => 'required',
            'marital_status' => 'required',
            'user_name' => 'required',
            'phone_number' => 'required',
            'offical_email' => 'required',
            'personal_email' => 'required',
            'nationality' => 'required',
            'alter_phone_number' => 'required',
        ]);
       $this->education_active = "active";
       $this->status = 2;
    }
    public function role_next(){
        $this->validate([
            'experience' => 'required',
            'category' => 'required',
            'department' => 'required',
            'grade' => 'required',
            'designation' => 'required',
        ]);
       $this->basic_active = "active";
       $this->status = 1;
    }
    public function education_next(){
        $this->education_active = "active";
        $this->identification_active = "active";
        $this->status = 3;
    }
    public function identification_next(){
        $this->validate([
                'aadhar_number' => 'required',
                'pan_number' => 'required',
            ]);
        $this->education_active = "active";
        $this->identification_active = "active";
        $this->offical_active = "active";
        $this->status = 4;
    }
    public function addDiv($increment)
    {
        $this->i = $increment+1;
        $this->employer_name[$increment+1]='';
        $this->employer_desigination[$increment+1]='';
        $this->employer_from[$increment+1]='';
        $this->employer_to[$increment+1]='';
        $this->employer_leave_reason[$increment+1]='';
        $this->employer_ctc[$increment+1]='';
        array_push($this->inputs, $increment+1);
    }
    public function removeDiv($decrement){
        if($decrement!=1)
        {
         $this->i=$decrement-1;
        }
        else{
         $this->i=$this->i-$decrement;
        }
         unset($this->inputs[$decrement-1]);
         unset($this->employer_name[$decrement]);
         unset($this->employer_desigination[$decrement]);
         unset($this->employer_from[$decrement]);
         unset($this->employer_to[$decrement]);
         unset($this->employer_leave_reason[$decrement]);
         unset($this->employer_ctc[$decrement]);
    }
    public function addDiv2($increment2)
    {
        $this->i2 = $increment2+1;
        $this->reference_name[$increment2+1]='';
        $this->reference_organisation[$increment2+1]='';
        $this->reference_designation[$increment2+1]='';
        $this->reference_phone[$increment2+1]='';
        array_push($this->inputs2, $increment2+1);
    }
    public function removeDiv2($decrement2){
        if($decrement2!=1)
        {
         $this->i2=$decrement2-1;
        }
        else{
         $this->i2=$this->i2-$decrement2;
        }
         unset($this->inputs2[$decrement2-1]);
         unset($this->reference_name[$decrement2-1]);
         unset($this->reference_organisation[$decrement2-1]);
         unset($this->reference_designation[$decrement2-1]);
         unset($this->reference_phone[$decrement2-1]);
    }
    // =========================================Add Employee===============================================
    public function add_employee(){
        $this->validate([
            'emp_id' => 'required',
            'emp_code' => 'required',
            'employee_doj' => 'required',
            'employee_division' => 'required',
            'employee_designation' => 'required',
            'employee_report_to' => 'required',
            'employement_type' => 'required',
            'employement_status' => 'required',
            'employee_access' => 'required',
        ]);
        $user = new User;
        $user->name = $this->first_name;
        $user->email = $this->offical_email;
        $user->user_group_id = $this->employee_access;
        $user->usergroup_department_id = $this->department;
        $user->usergroup_experience_id = $this->experience;
        $user->usergroup_category_id = $this->category;
        $user->usergroup_grade_id = $this->grade;
        $user->usergroup_desigination_id = $this->designation;
        $password = $this->emp_id.$this->emp_code;
        $user->password = bycrypt($password);
        $user->save();
        $employee = new Employee;
        // $this->validate([
        //     'transfer_letter' => 'required|file',
        // ]);
        // dd('hello');
        // dd($this->transfer_letter);
        // // $employee->save();
        // // $extension = $this->sslc_file->getClientOriginalExtension();
        // dd($this->transfer_letter);
        // $addimage= new Education;
        //     // dd($this->image->getClientOriginalExtension());
        //         $extension = $this->image->getClientOriginalExtension();
        //     $image=$this->image->storeAs('images'.'/banner',$addbanner->name.'_'.$addbanner->id.'.'.$extension,'public');
        //     $addimage->image=$image;
        //     $addimage->save();
            // dd("end"); =


        $employee->user_id =  $user->id;
        $employee->first_name = $this->first_name;
        $employee->last_name = $this->last_name;
        $employee->gender = $this->gender;
        $employee->dob_certificate = $this->certificate_dob;
        $employee->dob_original = $this->orginal_dob;
        $employee->marital_status = $this->marital_status;
        $employee->user_name = $this->user_name;
        $employee->phone_no = $this->phone_number;
        $employee->offical_mail = $this->offical_email;
        $employee->personal_mail = $this->personal_email;
        $employee->nationality = $this->nationality;
        $employee->alter_phone_no = $this->alter_phone_number;
        $employee->father_name = $this->father_name;
        $employee->blood_group = $this->blood_group;
        $employee->residential_address = $this->residential_address;
        $employee->permanent_address = $this->permenente_address;
        $employee->emergency_name = $this->emergency_contact_name;
        $employee->emergency_relation = $this->emergency_contact_relation;
        $employee->emergency_number = $this->emergency_contact_number;
        $employee->aadhar_number = $this->aadhar_number;
        $employee->aadhar_file = $this->aadhar_file;
        $employee->pan_number = $this->pan_number;
        $employee->pan_file = $this->pan_file;
        $employee->license_number = $this->license_number;
        $employee->license_up_to = $this->license_valid;
        $employee->license_file = $this->license_file;
        $employee->emp_id = $this->emp_id;
        $employee->emp_code = $this->emp_code;
        $employee->doj = $this->employee_doj;
        $employee->division = $this->employee_division;
        $employee->designation = $this->employee_designation;
        $employee->reporting_to = $this->employee_report_to;
        $employee->employment_type = $this->employement_type;
        $employee->employment_status = $this->employement_status;
        $employee->employee_access = $this->employee_access;
        $employee->skill1 = $this->skills1;
        $employee->skill2 = $this->skills2;
        $employee->skill3 = $this->skills3;
        $employee->basic = $this->compensation_basic;
        $employee->hra = $this->compensation_hra;
        $employee->other_allowances = $this->compensation_other_allowances;
        $employee->ctc = $this->compensation_ctc;
        $employee->cost_hra = $this->compensation_cost_hr;
        $employee->profile_picture = $this->profile_picture;
        $employee->offer_letter = $this->offer_letter;
        $employee->teansfer_letter = $this->transfer_letter;
        $employee->experience_letter = $this->experience_letter;
        $employee->month_pay_slip = $this->pay_slip;
        $employee->resume = $this->resume;
        $employee->save();


        $education = new Education;
        $education->employee_id = $employee->id;
        $education->sslc_institution = $this->sslc_institution;
        $education->sslc_board = $this->sslc_board;
        $education->sslc_date = $this->sslc_date;
        $education->sslc_percentage = $this->sslc_percentage;
        $education->sslc_file = $this->sslc_file;
        $education->hsc_institution = $this->hsc_institution;
        $education->hsc_board = $this->hsc_board;
        $education->hsc_date = $this->hsc_date;
        $education->hsc_percentage = $this->hsc_percentage;
        $education->hsc_file = $this->hsc_file;
        $education->diploma_institution = $this->diploma_institution;
        $education->diploma_board = $this->diploma_board;
        $education->diploma_date = $this->diploma_date;
        $education->diploma_percentage = $this->diploma_percentage;
        $education->diploma_file = $this->diploma_file;
        $education->bachelor_institution = $this->bachelor_intitution;
        $education->bachelor_board = $this->bachelor_board;
        $education->bachelor_date = $this->bachelor_date;
        $education->bachelor_percentage = $this->bachelor_percentage;
        $education->bachelor_file = $this->bachelor_file;
        $education->master_institution = $this->master_institution;
        $education->master_board = $this->master_board;
        $education->master_date = $this->master_date;
        $education->master_percentage = $this->master_percentage;
        $education->master_file = $this->master_file;
        $education->save();

        if($this->employer_name != ""){
            foreach($this->employer_name as $key=>$value)
            {
                $experience = new Experience;
                $experience->employee_id = $employee->id;
                $experience->name = $this->employer_name[$key];
                $experience->designation = $this->employer_desigination[$key];
                $experience->from = $this->employer_from[$key];
                $experience->to = $this->employer_to[$key];
                $experience->leave_reason = $this->employer_leave_reason[$key];
                $experience->ctc = $this->employer_ctc[$key];
                $experience->save();
            }
        }

        if($this->reference_name != ""){
            foreach($this->reference_name as $key=>$value)
            {
                $reference = new Reference;
                $reference->employee_id = $employee->id;
                $reference->name = $this->reference_name[$key];
                $reference->organisation = $this->reference_organisation[$key];
                $reference->designation = $this->reference_designation[$key];
                $reference->phone = $this->reference_phone[$key];
                $reference->save();
            }
        }
        $bank = new Bank;
        $bank->employee_id = $employee->id;
        $bank->name = $this->bank_name;
        $bank->branch = $this->branch_name;
        $bank->number = $this->account_number;
        $bank->ifsc = $this->ifsc_code;
        $bank->passbook_file = $this->passbook_file;
        $bank->save();
        $this->reset();
        $this->emit('UpdateEmployee');
    }
    public function render()
    {
        $user_groups= Usergroup::all();
        $user_group_departments=UsergroupDepartment::all();
        $user_group_grades=UsergroupGrade::all();
        $user_group_categories=UsergroupCategories::all();
        $user_group_experiences=UsergroupExperience::all();
        $user_group_desiginations=UsergroupDesigination::all();
       
        return view('livewire.chennai.employee.add-employee',['user_groups'=>$user_groups,'user_group_departments'=>$user_group_departments,'user_group_grades'=>$user_group_grades,'user_group_categories'=>$user_group_categories,'user_group_experiences'=>$user_group_experiences,'user_group_desiginations'=>$user_group_desiginations]);
    }
}
