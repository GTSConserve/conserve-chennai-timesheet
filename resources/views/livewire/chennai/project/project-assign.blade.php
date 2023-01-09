<div>

    <div class="page-header row">
        <div class="col-10">
            <h3><b>Project Assign</b></h3>
        </div>
     
    </div>
    <div id="msform">
        <fieldset class="">
            @if ($user_group_id < 9)
            <div class="row ">
                <div class="col-sm-6">
                    <label id="selected_project_id">Project Name</label>
                    <select name="" class="form-control" id="" wire:model="selected_project_id">
                        <option>Select Project</option>
                        @foreach ($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4"></div>
                @if($selected_project_id)
                <div class="col-2">
                    <input type="button" name="next" class="btn btn-warning" wire:click="unassign()" value="unassign">
                </div>
                @endif
            </div>
            @if($selected_project_id)
            <div class="row">
                @if($user_group_id <5)
                <div class="col-md-6" style="text-align:justify;">
                    <label id="selected_project_manager_head">Project Manager Head</label>
                    <div class="form-group">
                        <select class="form-control" wire:model="selected_project_manager_head">
                            <option>Select Project Manager Head</option>
                            @foreach ($project_manager_heads as $project_manager_head)
                            <option value="{{$project_manager_head->id}}" @if($this->
                                selected_project_manager_head==$project_manager_head->id) selected
                                @endif>{{$project_manager_head->first_name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                    @endif
               
                @if($user_group_id <6)
                <div class="col-sm-6">
                    <label id="selected_project_manager">Project Manager</label>
                    <div class="form-group">
                        <select name="" class="form-control" wire:model="selected_project_manager">

                            <option>Select Project Manager</option>

                            @foreach ($project_managers as $project_manager)
                            <option value="{{$project_manager->id}}" @if($this->
                                selected_project_manager==$project_manager->id) selected
                                @endif>{{$project_manager->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif
            </div>
            @endif
            @endif
        </fieldset>
    </div>
    <div id="msform">
        @if($selected_project_id)

        <fieldset class="mt-2">
            <div class="row">
              
                @if($user_group_id < 7)
                <div class="col-2">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-success"> Exsisiting Project Lead</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($pl_lists)>0)
                            @foreach ($pl_lists as $project_lead)
                            <tr class="text-center">

                                <td>
                                    <p>{{$project_lead->user->first_name}}<span style="cursor: pointer;"
                                            wire:click="remove_project_lead('{{ $project_lead->user->id }}')"
                                            class="ml-3 text-danger"><svg xmlns="http://www.w3.org/2000/svg
                                " width="16" height="16" fill="currentColor" class="bi bi-dash-circle"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </span>
                                        </svg></p>


                                </td>
                            </tr>

                            @endforeach
                            @else
                            <tr class="text-center">
                                <td>
                                    No Project Leads Found
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="col-2">

                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-success">Project Lead List</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project_leads as $project_lead)
                            @if(!collect($old_pl_ids)->contains($project_lead->user_id))
                            <tr class="text-center">
                                <td>

                                    <p>{{$project_lead->first_name}} <span class="ml-3 text-success"
                                            style="cursor: pointer;"
                                            wire:click="add_project_lead('{{ $project_lead->user_id }}')"> <svg xmlns="http://www.w3.org/2000/svg
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
              
                @if($user_group_id < 8)
                <div class="col-2">

                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-secondary">Excisting Team Lead</p>
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
                                        </span>
                                        </svg></p>


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
                <div class="col-2">

                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-secondary">Team Lead List</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team_leads as $team_lead)
                            @if(!collect($old_tl_ids)->contains($team_lead->user_id))
                            <tr class="text-center">
                                <td>

                                    <p>{{$team_lead->first_name}} <span class="ml-3 text-success"
                                            style="cursor: pointer;"
                                            wire:click="add_team_lead('{{ $team_lead->user_id }}')"> <svg xmlns="http://www.w3.org/2000/svg
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
                <div class="col-2">

                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-warning">Exsistig Employee</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($emp_lists)>0)
                            @foreach ($emp_lists as $employee)
                            <tr class="text-center">
                                <td>
                                    <p>{{$employee->user->first_name}}<span style="cursor: pointer;"
                                            wire:click="remove_employee('{{ $employee->user->id }}')"
                                            class="ml-3 text-danger"><svg xmlns="http://www.w3.org/2000/svg
                                     " width="16" height="16" fill="currentColor" class="bi bi-dash-circle"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                        </span>
                                        </svg></p>


                                </td>


                            </tr>
                            @endforeach
                            @else
                            <tr class="text-center">
                                <td>
                                    No employees Found
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="col-2">

                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="table-secondary">
                                    <p class="badge badge-warning">Employee List</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            @if(!collect($old_emp_ids)->contains($employee->user_id))
                            <tr class="text-center">
                                <td>

                                    <p>{{$employee->first_name}} <span class="ml-3 text-success"
                                            style="cursor: pointer;"
                                            wire:click="add_employee('{{ $employee->user_id }}')"> <svg xmlns="http://www.w3.org/2000/svg
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

            </div>
            @if(($old_project_manager_head!=$selected_project_manager_head)||($old_project_manager!=$selected_project_manager))
            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="next action-button" wire:click="save()" value="Save">
                </div>
            </div>
            @endif

        </fieldset>
        @endif
    </div>
    