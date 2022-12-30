<div>
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Project Tree Structure</b></h3>
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-2">
            <div class="row">
                <div class="col-sm-4">
                    <label id="lable">Project Name</label>
                    <select class="form-control" wire:model="project_id">
                        <option>--Select Project--</option>
                        @foreach ($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>
    </div>
    @if($project_id)
   
    <div id="msform">

        <fieldset class="mt-2">
    <div class="row">
        <div class="col-6">
            <label id="lable">Select Project Lead</label>
                <select class="form-control" wire:model="selected_project_lead">
                    <option>Select Project Lead</option>
                    @foreach ($project_leads_dropdown as $project_lead)
                    <option value="{{$project_lead->user->id}}">{{$project_lead->user->first_name}}</option>
                    @endforeach
                </select>
    </div>
       <div class="col-6">
        <label id="lable">Select Team Lead</label>
                <select class="form-control" wire:model="selected_team_lead">
                    <option>Select Team Lead</option>
                    @foreach ($team_leads_dropdown as $team_lead)
                    <option value="{{$team_lead->user->id}}">{{$team_lead->user->first_name}}</option>
                    @endforeach
                </select>
    </div>
    </div>
        </fieldset>
    </div>
    @if($selected_project_lead||$selected_team_lead)
    <div id="msform">

        <fieldset class="mt-2">
    <div class="row">
        @if($selected_project_lead)
        <div class="col-3">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="table-secondary">
                            <p class="badge badge-secondary"> Exsisiting Reporting Team Lead</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tl_lists)>0)
                    @foreach ($tl_lists as $team_lead)
                    <tr class="text-center">

                        <td>
                            <p>{{$team_lead->user->first_name}}<span style="cursor: pointer;"
                                wire:click="remove_team_lead('{{ $team_lead->user->id }}')"
                                    class="ml-3 text-danger"><svg xmlns="http://www.w3.org/2000/svg
                        " width="16" height="16" fill="currentColor" class="bi bi-dash-circle"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </span>
                            </p>


                        </td>
                    </tr>
                  
                   @endforeach
                   @else
                   <tr class="text-center">
                       <td>
                           No Team Leads Found
                       </td>
                   </tr>
                   @endif
                </tbody>
            </table>
    </div>
    <div class="col-3">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th class="table-secondary">
                        <p class="badge badge-secondary"> Add Team Lead</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team_lead_lists as $team_lead)
                @if(!collect($old_tl_ids)->contains($team_lead->user->id))
                <tr class="text-center">

                    <td>
                        <p>{{$team_lead->user->first_name}}<span class="ml-3 text-success"
                            style="cursor: pointer;"
                            wire:click="add_team_lead('{{ $team_lead->user->id }}')"> <svg xmlns="http://www.w3.org/2000/svg
                " width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg></span>
                        </p>


                    </td>
                </tr>
@endif
               @endforeach
            </tbody>
        </table>
</div>
@else
<div class="col-3" >
</div>
<div class="col-3" >
</div>
    @endif
@if($selected_team_lead)
<div class="col-3">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th class="table-secondary">
                    <p class="badge badge-warning"> Exsisiting Reporting Employee</p>
                </th>
            </tr>
        </thead>
        <tbody>
@if(count($emp_lists)>0)
            @foreach ($emp_lists as $employee)
            <tr class="text-center">

                <td>
                    <p>{{$employee->user->first_name}}<span style="cursor: pointer;" wire:click="remove_employee('{{ $employee->user->id }}')"
                            
                            class="ml-3 text-danger"><svg xmlns="http://www.w3.org/2000/svg
                " width="16" height="16" fill="currentColor" class="bi bi-dash-circle"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                            </svg>
                        </span>
                    </p>


                </td>
            </tr>
            

           @endforeach
           @else
           <tr class="text-center">
               <td>
                   No Employee Found
               </td>
           </tr>
           @endif
        </tbody>
    </table>
</div>
       <div class="col-3">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th class="table-secondary">
                        <p class="badge badge-warning"> Add Employee</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee_lists as $key=>$employee)
                @if(!collect($old_emp_ids)->contains($employee->user->id))

                <tr class="text-center">

                    <td>
                        <p>{{$employee->user->first_name}}<span class="ml-3 text-success"
                            style="cursor: pointer;"
                            wire:click="add_employee('{{ $employee->user->id }}')"> <svg xmlns="http://www.w3.org/2000/svg
                " width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg></span></p>


                    </td>
                </tr>
                @endif
@endforeach
              
            </tbody>
        </table>
    </div>
    @endif
    </div>
        </fieldset>
    </div>
    @endif
    @endif

</div>
