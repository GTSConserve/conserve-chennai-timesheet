<?php

namespace App\Http\Livewire\Chennai\Employee;
use App\Models\Employee;
use App\Models\Education;
use App\Models\Bank;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class AllEmployee extends Component
{

    public $employee_list,$status_group=1,$view_employee_list,$view_education_list,$edit_employee_list,$update_employee_id;
    // ============================EDIT UPDATE================================
    public $status=1;
    public $basic_active ="active",$education_active,$identification_active,$offical_active;
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
    // ==============================EDIT UPDATE===============================
    // ==============================LIST Employee===============================
    public function back(){
        $this->status_group=1;
    }
    public function view_employee($employee_id){
        $this->status_group=2;
        $this->view_employee_list = Employee::where('id',$employee_id)->first();
        $this->view_education_list = Education::where('id',$employee_id)->first();
    }
    public function edit_employee($employee_id){
        $this->status_group=3;
        $this->status=1;
        $this->education_active = "";
        $this->identification_active = "";
        $this->offical_active = "";
        $edit_employee_list = Employee::where('id',$employee_id)->first();
        if($edit_employee_list !=""){
            $this->update_employee_id = $edit_employee_list->id;
            $this->first_name = $edit_employee_list->first_name;
            $this->last_name = $edit_employee_list->last_name;
            $this->gender = $edit_employee_list->gender;
            $this->certificate_dob = $edit_employee_list->dob_certificate;
            $this->orginal_dob = $edit_employee_list->dob_original;
            $this->marital_status = $edit_employee_list->marital_status;
            $this->user_name = $edit_employee_list->user_name;
            $this->phone_number = $edit_employee_list->phone_no;
            $this->offical_email = $edit_employee_list->offical_mail;
            $this->personal_email = $edit_employee_list->personal_mail;
            $this->nationality = $edit_employee_list->nationality;
            $this->alter_phone_number = $edit_employee_list->alter_phone_no;
            $this->father_name = $edit_employee_list->father_name;
            $this->blood_group = $edit_employee_list->blood_group;
            $this->residential_address = $edit_employee_list->residential_address;
            $this->permenente_address = $edit_employee_list->permanent_address;
            $this->emergency_contact_name = $edit_employee_list->emergency_name;
            $this->emergency_contact_relation = $edit_employee_list->emergency_relation;
            $this->emergency_contact_number = $edit_employee_list->emergency_number;
            $this->aadhar_number = $edit_employee_list->aadhar_number;
            $this->aadhar_file = $edit_employee_list->aadhar_file;
            $this->pan_number = $edit_employee_list->pan_number;
            $this->pan_file = $edit_employee_list->pan_file;
            $this->license_number = $edit_employee_list->license_number;
            $this->license_valid = $edit_employee_list->license_up_to;
            $this->license_file = $edit_employee_list->license_file;
            $this->emp_id = $edit_employee_list->emp_id;
            $this->emp_code = $edit_employee_list->emp_code;
            $this->employee_doj = $edit_employee_list->doj;
            $this->employee_division = $edit_employee_list->division;
            $this->employee_designation = $edit_employee_list->designation;
            $this->employee_report_to = $edit_employee_list->reporting_to;
            $this->employement_type = $edit_employee_list->employment_type;
            $this->employement_status = $edit_employee_list->employment_status;
            $this->employee_access = $edit_employee_list->employee_access;
            $this->skills1 = $edit_employee_list->skills1;
            $this->skills2 = $edit_employee_list->skills2;
            $this->skills3 = $edit_employee_list->skills3;
            $this->compensation_basic = $edit_employee_list->basic;
            $this->compensation_hra = $edit_employee_list->hra;
            $this->compensation_other_allowances = $edit_employee_list->other_allowances;
            $this->compensation_ctc = $edit_employee_list->ctc;
            $this->compensation_cost_hr = $edit_employee_list->cost_hra;
            $this->profile_picture = $edit_employee_list->profile_picture;
            $this->offer_letter = $edit_employee_list->offer_letter;
            $this->transfer_letter = $edit_employee_list->transfer_letter;
            $this->experience_letter = $edit_employee_list->experience_letter;
            $this->pay_slip = $edit_employee_list->pay_slip;
            $this->resume = $edit_employee_list->resume;
        }


        $edit_education = Education::where('employee_id',$employee_id)->first();
        if($edit_education !=""){
            $this->sslc_institution = $edit_education->sslc_institution;
            $this->sslc_board = $edit_education->sslc_board;
            $this->sslc_date = $edit_education->sslc_date;
            $this->sslc_percentage = $edit_education->sslc_percentage;
            $this->sslc_file = $edit_education->sslc_file;
            $this->hsc_institution = $edit_education->hsc_institution;
            $this->hsc_board = $edit_education->hsc_board;
            $this->hsc_date = $edit_education->hsc_date;
            $this->hsc_percentage = $edit_education->hsc_percentage;
            $this->hsc_file = $edit_education->hsc_file;
            $this->diploma_institution = $edit_education->diploma_institution;
            $this->diploma_board = $edit_education->diploma_board;
            $this->diploma_date = $edit_education->diploma_date;
            $this->diploma_percentage = $edit_education->diploma_percentage;
            $this->diploma_file = $edit_education->diploma_file;
            $this->bachelor_institution = $edit_education->bachelor_intitution;
            $this->bachelor_board = $edit_education->bachelor_board;
            $this->bachelor_date = $edit_education->bachelor_date;
            $this->bachelor_percentage = $edit_education->bachelor_percentage;
            $this->bachelor_file = $edit_education->bachelor_file;
            $this->master_institution = $edit_education->master_institution;
            $this->master_board = $edit_education->master_board;
            $this->master_date = $edit_education->master_date;
            $this->master_percentage = $edit_education->master_percentage;
            $this->master_file = $edit_education->master_file;
        }

        $edit_bank = Bank::where('employee_id',$employee_id)->first();
        if($edit_bank !=""){
            $this->bank_name = $edit_bank->name;
            $this->branch_name = $edit_bank->branch;
            $this->account_number = $edit_bank->number;
            $this->ifsc_code = $edit_bank->ifsc;
            $this->passbook_file = $edit_bank->passbook_file;
        }

    }
    //==========================================================================================
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
       $this->education_active = "active";
       $this->status = 2;
    }
    public function education_next(){
        $this->education_active = "active";
        $this->identification_active = "active";
        $this->status = 3;
    }
    public function identification_next(){
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
    public function update_employee(){

        $update_employee_list = Employee::where('id',$this->update_employee_id)->first();
        $update_employee_list->first_name = $this->first_name;
        $update_employee_list->last_name = $this->last_name;
        $update_employee_list->gender = $this->gender;
        $update_employee_list->dob_certificate = $this->certificate_dob;
        $update_employee_list->dob_original = $this->orginal_dob;
        $update_employee_list->marital_status = $this->marital_status;
        $update_employee_list->user_name = $this->user_name;
        $update_employee_list->phone_no = $this->phone_number;
        $update_employee_list->offical_mail = $this->offical_email;
        $update_employee_list->personal_mail = $this->personal_email;
        $update_employee_list->nationality = $this->nationality;
        $update_employee_list->alter_phone_no = $this->alter_phone_number;
        $update_employee_list->father_name = $this->father_name;
        $update_employee_list->blood_group = $this->blood_group;
        $update_employee_list->residential_address = $this->residential_address;
        $update_employee_list->permanent_address = $this->permenente_address;
        $update_employee_list->emergency_name = $this->emergency_contact_name;
        $update_employee_list->emergency_relation = $this->emergency_contact_relation;
        $update_employee_list->emergency_number = $this->emergency_contact_number;
        $update_employee_list->aadhar_number = $this->aadhar_number;
        $update_employee_list->aadhar_file = $this->aadhar_file;
        $update_employee_list->pan_number = $this->pan_number;
        $update_employee_list->pan_file = $this->pan_file;
        $update_employee_list->license_number = $this->license_number;
        $update_employee_list->license_up_to = $this->license_valid;
        $update_employee_list->license_file = $this->license_file;
        $update_employee_list->emp_id = $this->emp_id;
        $update_employee_list->emp_code = $this->emp_code;
        $update_employee_list->doj = $this->employee_doj;
        $update_employee_list->division = $this->employee_division;
        $update_employee_list->designation = $this->employee_designation;
        $update_employee_list->reporting_to = $this->employee_report_to;
        $update_employee_list->employment_type = $this->employement_type;
        $update_employee_list->employment_status = $this->employement_status;
        $update_employee_list->employee_access = $this->employee_access;
        $update_employee_list->skill1 = $this->skills1;
        $update_employee_list->skill2 = $this->skills2;
        $update_employee_list->skill3 = $this->skills3;
        $update_employee_list->basic = $this->compensation_basic;
        $update_employee_list->hra = $this->compensation_hra;
        $update_employee_list->other_allowances = $this->compensation_other_allowances;
        $update_employee_list->ctc = $this->compensation_ctc;
        $update_employee_list->cost_hra = $this->compensation_cost_hr;
        $update_employee_list->profile_picture = $this->profile_picture;
        $update_employee_list->offer_letter = $this->offer_letter;
        $update_employee_list->teansfer_letter = $this->transfer_letter;
        $update_employee_list->experience_letter = $this->experience_letter;
        $update_employee_list->month_pay_slip = $this->pay_slip;
        $update_employee_list->resume = $this->resume;
        $update_employee_list->save();


        $Update_education = Education::where('employee_id',$this->update_employee_id)->first();
        $Update_education->sslc_institution = $this->sslc_institution;
        $Update_education->sslc_board = $this->sslc_board;
        $Update_education->sslc_date = $this->sslc_date;
        $Update_education->sslc_percentage = $this->sslc_percentage;
        $Update_education->sslc_file = $this->sslc_file;
        $Update_education->hsc_institution = $this->hsc_institution;
        $Update_education->hsc_board = $this->hsc_board;
        $Update_education->hsc_date = $this->hsc_date;
        $Update_education->hsc_percentage = $this->hsc_percentage;
        $Update_education->hsc_file = $this->hsc_file;
        $Update_education->diploma_institution = $this->diploma_institution;
        $Update_education->diploma_board = $this->diploma_board;
        $Update_education->diploma_date = $this->diploma_date;
        $Update_education->diploma_percentage = $this->diploma_percentage;
        $Update_education->diploma_file = $this->diploma_file;
        $Update_education->bachelor_institution = $this->bachelor_intitution;
        $Update_education->bachelor_board = $this->bachelor_board;
        $Update_education->bachelor_date = $this->bachelor_date;
        $Update_education->bachelor_percentage = $this->bachelor_percentage;
        $Update_education->bachelor_file = $this->bachelor_file;
        $Update_education->master_institution = $this->master_institution;
        $Update_education->master_board = $this->master_board;
        $Update_education->master_date = $this->master_date;
        $Update_education->master_percentage = $this->master_percentage;
        $Update_education->master_file = $this->master_file;
        $Update_education->save();

        // if($this->employer_name != ""){
        //     foreach($this->employer_name as $key=>$value)
        //     {
        //         $experience = new Experience;
        //         $experience->name = $this->employer_name[$key];
        //         $experience->designation = $this->employer_desigination[$key];
        //         $experience->from = $this->employer_from[$key];
        //         $experience->to = $this->employer_to[$key];
        //         $experience->leave_reason = $this->employer_leave_reason[$key];
        //         $experience->ctc = $this->employer_ctc[$key];
        //         $experience->save();
        //     }
        // }

        // if($this->reference_name != ""){
        //     foreach($this->reference_name as $key=>$value)
        //     {
        //         $reference = new Reference;
        //         $reference->employee_id = $employee->id;
        //         $reference->name = $this->reference_name[$key];
        //         $reference->organisation = $this->reference_organisation[$key];
        //         $reference->designation = $this->reference_designation[$key];
        //         $reference->phone = $this->reference_phone[$key];
        //         $reference->save();
        //     }
        // }
        $update_bank = Bank::where('employee_id',$this->update_employee_id)->first();
        if($update_bank !=""){
            $update_bank->name = $this->bank_name;
            $update_bank->branch = $this->branch_name;
            $update_bank->number = $this->account_number;
            $update_bank->ifsc = $this->ifsc_code;
            $update_bank->passbook_file = $this->passbook_file;
            $update_bank->save();
        }
        $this->emit('UpdateEmployee');
        $this->status_group=1;

    }
        // ==========================================================================================

    public function render()
    {
        $this->employee_list = Employee::all();
        return view('livewire.chennai.employee.all-employee',['employee_lists' => $this->employee_list]);
    }
}
