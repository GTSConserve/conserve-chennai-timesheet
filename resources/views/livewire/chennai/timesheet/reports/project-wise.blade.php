<div>
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Project Wise Reports</b></h3>
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-1">
            <div class="row">
                <div class="col-sm-6">
                    <label id="lable">Project</label>
                    <select name="" class="form_input" wire:model="project_id">
                        {{-- id="" wire:change="project_change($event.target.value)" --}}
                        <option value="">Select Project</option>
                            @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <div class="mt-3">
                        <input type="button" name="submit" style="width:100px;height:40px;" class="submit action-button mt-3" wire:click="search()" value="Submit" />
                        {{-- <a href=""><input type="button" name="submit" style="width:100px;height:40px;" class="submit action-button mt-3" wire:click="submit()" value="Submit" /></a> --}}
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="p-1"></div>
    @if ($status == 1)
        <div id="msform">
            <fieldset class="mt-1">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        @if ($project_details->name !="")
                            <p id="lable"><b>Project Name : {{$project_details->name}}</b></p>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <div class=""><p id="lable" class="text-right"><b>Employees : {{$emp_count}}</b></p></div>
                    </div>
                </div>
                <table id="zero-config" class="table mt-2" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Date</th>
                            <th class="table-secondary">Employee Name</th>
                            <th class="table-secondary">Activity Type</th>
                            <th class="table-secondary">Working Hrs</th>
                            <th class="table-secondary">Approved Hrs</th>
                            <th class="table-secondary">Approved By</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($timesheets)
                            @foreach ($timesheets as $timesheet)
                                <tr class="text-center">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$timesheet->date}}</td>
                                    <td>{{$timesheet->project->name}}</td>
                                    <td>
                                        @if ($timesheet->activity->status == 1)
                                            {{"Billable"}}
                                        @else
                                            {{"Non Billable"}}
                                        @endif
                                    </td>
                                    <td>{{$timesheet->work_hours}}</td>
                                    <td>{{$timesheet->approved_work_hours}}</td>
                                    <td>{{$timesheet->user->name}}</td>
                                    <td><button class = "btn btn-primary" wire:click="view({{$timesheet->id}})">View</button></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-5">
                            <table  class="table table-striped" style="width:100%;">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan ="3" class="table-secondary">Head Of Project Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project_manager_heads as $pmd)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$pmd->user->first_name}}</td>
                                        <td><svg wire:click="pmh_remove({{$pmd->id}})" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-5">
                            <table  class="table" style="width:100%;">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan ="3" class="table-secondary">Project Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project_managers as $pm)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$pm->user->first_name}}</td>
                                        <td><svg wire:click="pm_remove({{$pm->id}})" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="p-5">
                            <table  class="table" style="width:100%;">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan ="3" class="table-secondary">Project Lead</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project_leads as $pl)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$pl->user->first_name}}</td>
                                        <td><svg wire:click="pl_remove({{$pl->id}})" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-5">
                            <table  class="table" style="width:100%;">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan ="3" class="table-secondary">Team Lead</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team_leads as $tl)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$tl->user->first_name}}</td>
                                        <td><svg wire:click="tl_remove({{$tl->id}})" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="p-5">
                            <table  class="table" style="width:100%;">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan ="3" class="table-secondary">Employee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$employee->user->first_name}}</td>
                                        <td><svg wire:click="emp_remove({{$employee->id}})" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    @endif
    </div>
</div>
