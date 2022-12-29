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
    <div class="page-header row">
        <div class="col-6">
            <h3><b>Project Leads</b></h3>
        </div>
        <div class="col-6">
            <h3><b>Team Leads</b></h3>
        </div>
    </div>
    <div class="row">
        <fieldset class="mt-3 col-6">
                <label >Project Lead</label>
                <select class="form-control" wire:model="selected_project_lead">
                    <option>Select Project Lead</option>
                    @foreach ($project_leads_dropdown as $project_lead)
                    <option value="{{$project_lead->user->id}}">{{$project_lead->user->first_name}}</option>
                    @endforeach
                </select>
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">Team Lead List</th>
                          
                        </tr>
                    </thead>
                  
                    <tbody>
                    @foreach ($team_lead_lists as $key=>$team_lead)
                            <tr class="text-center">
                                
                                <td><div class="n-chk">
                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                              <input type="checkbox" class="new-control-input" wire:model="team_lead" >
                              <span class="new-control-indicator"></span>{{$team_lead->user->first_name}}
                            </label>
                        </div></td>
                               
                            </tr>
                            @endforeach
                    </tbody>
                 
                </table>
        </fieldset>
        <fieldset class="mt-3 col-6" >
                <label i>Team Lead</label>
                <select class="form-control" wire:model="selected_team_lead">
                    <option>Select Team Lead</option>
                    @foreach ($team_leads_dropdown as $team_lead)
                    <option value="{{$team_lead->user->id}}">{{$team_lead->user->first_name}}</option>
                    @endforeach
                </select>
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">Project Lead List</th>
                          
                        </tr>
                    </thead>
                  
                    <tbody>
                   
                            <tr class="text-center">
                            @foreach ($employee_lists as $key=>$employee)
                                <td><div class="n-chk">
                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                              <input type="checkbox" class="new-control-input"  >
                              <span class="new-control-indicator"></span>{{$employee->user->first_name}}
                            </label>
                        </div></td>
                        
                        @endforeach
               
                            </tr>
                 
                     
                    </tbody>
                </table>
                <div >
                  <button class="form-control btn-outline-success col-sm-3" wire:click="submit">submit</button>
                 </div>
        </fieldset>
    </div>
    @endif
</div>