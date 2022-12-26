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
                    <label id="lable">Tree Type</label>
                    <div class="form-control">
                        <input type="radio" wire:model="tree_type" id="team" value="1">&nbsp<span for="team">Team
                            Lead</span>&nbsp&nbsp
                        <input type="radio" wire:model="tree_type" id="employee" value="0">&nbsp<span
                            for="employee">Employee</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label id="lable">Project Name</label>
                    <select class="form-control" wire:model="project_id">
                        <option>--Select Project--</option>
                        @foreach ($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                </div>

                @if($project_id)
                <div class="col-sm-4">
                    <label id="lable">{{$heading}} Lead</label>
                    <select class="form-control" wire:model="selected_lead">
                        <option>Select{{$heading}} Lead</option>
                        @foreach ($leads as $lead)
                        <option value="{{$lead->user->id}}">{{$lead->user->first_name}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
            </div>

            {{-- <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="next action-button" wire:click="add()" value="Filter">
                </div>
            </div> --}}

        </fieldset>
    </div>
    @if($employee_lists)
    <div class="page-header row">
        <div class="col-11">
            <h3><b>{{$heading}} Leads</b></h3>
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-3">
            <table id="zero-config" class="table" style="width:100%;">
                <thead>
                    <tr class="text-center">
                        <th class="table-secondary">Select {{$heading}}</th>
                        <th class="table-secondary">User Name</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($employee_lists)>0)
                    @foreach ($employee_lists as $key=>$team_lead_list)
                    <tr class="text-center">
                        <td></td>
                        <td>{{$team_lead_list->user->first_name}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
        </fieldset>
    </div>
    @endif
</div>