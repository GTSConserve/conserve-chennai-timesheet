<div>
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Project Assign</b></h3>
        </div>
        <div class="col-1">
            {{-- <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" > --}}
        </div>
    </div>
    <div id="msform">
        @if ($user_group_id == 2)
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Name</label>
                        <select name="" class="form_input" id="" style="height:50px;" wire:model="project_name">
                            <option>--Select Project--</option>
                            @foreach ($projects as $project)
                                <option value="{{$project->id}}">{{$project->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Manager Head</label>
                        <select class="form_input"  id="" wire:model="project_manager_head" multiple>
                            @foreach ($pm_heads as $pm_head)
                                <option value ="{{$pm_head->id}}">{{$pm_head->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Manager</label>
                        <select name="" class="form_input " wire:model="project_manager" id="" multiple>
                            <option>--Select Project Manager--</option>
                            @foreach ($project_managers as $project_manager)
                                <option value ="{{$project_manager->id}}">{{$project_manager->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Lead</label>
                        <select name="" class="form_input" id="" wire:model="project_lead" multiple>
                            <option>--Select Project Lead--</option>
                            @foreach ($project_leads as $project_lead)
                                <option value ="{{$project_lead->id}}">{{$project_lead->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Team Lead</label>
                        <select name="" class="form_input" id="" wire:model="team_lead" multiple>
                            <option>--Select Team Lead--</option>
                            @foreach ($team_leads as $team_lead)
                                <option value ="{{$team_lead->id}}">{{$team_lead->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Employee</label>
                        <select name="" class="form_input" id="" wire:model="employee" multiple>
                            <option>--Select Employee--</option>
                            @foreach ($employees as $employee)
                                <option value ="{{$employee->id}}">{{$employee->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="add()" value="Save" >
                    </div>
                </div>
            </fieldset>
        @endif
    </div>
</div>
