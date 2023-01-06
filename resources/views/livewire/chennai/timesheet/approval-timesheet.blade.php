<div>
      @if($status == 1)
      <div class="">
        <div class="page-header row">
            <div class="col-11">
                <h3><b>View Approval Timesheet</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div class="card component-card_1 p-4">
            <div class="card-body">
               <div class="row">
                    <div class="col-2">
                        <lable><b>Date</b></lable>
                    </div>
                    <div class="col-4">
                        @if ($view_approval->date)
                            <input type="text" style="color:black;" class="form_input" value="{{date('d-m-Y',strtotime($view_approval->date))}}" readonly>
                        @endif
                    </div>
                    <div class="col-2">
                        <lable><b>Project Name</b></lable>
                    </div>
                    <div class="col-4">
                        @if ($view_approval->project)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->project->name}}" readonly>
                        @endif
                    </div>
               </div>
               <div class="row">
                    <div class="col-2">
                        <lable><b>Task</b></lable>
                    </div>
                    <div class="col-4">
                        @if ($view_approval->task)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->task->name}}" readonly>
                        @endif
                    </div>
                    @if ($view_approval->sub_task)
                        <div class="col-2">
                            <lable><b>Sub Task</b></lable>
                        </div>
                        <div class="col-4">
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->sub_task->name}}" readonly>
                        </div>
                    @else
                        <div class="col-6"></div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-2">
                        <lable><b>Activity</b></lable>
                    </div>
                    <div class="col-4">
                        @if ($view_approval->activity)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->activity->name}}" readonly>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        <lable><b>Working Hours</b></lable>
                    </div>
                    <div class="col-sm-4">
                        @if ($view_approval)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->work_hours}} hrs" readonly>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <lable><b>Description</b></lable>
                    </div>
                    <div class="col-4">
                        @if ($view_approval)
                            {{-- <input type="text" class="form_input" value="{{$view_approval->description}}" readonly> --}}
                            <textarea name="" style="color:black;" class="form_input" id="" readonly>{{$view_approval->description}}</textarea>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3"></div>
    </div>
      @else
        <div class="page-header row">
            <div class="col-10">
                <h3><b>Timesheet Approval</b></h3>
            </div>
            <div class="col-2">
                <select name="" class="form_input" wire:change="project_change()" wire:model="project_id">
                    {{-- id="" wire:change="project_change($event.target.value)" --}}
                    <option value="">All</option>
                    @foreach($project_names as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                @if ($piechart_status == 1)
                <div class="row p-3">
                    <div class="col-sm-12" style="background:#9bbb58;border:1px solid #808080; border-bottom:none;">
                        <h3 class="text-center" style="color:#fff;">
                            <b>Over All
                                {{-- @if ($project_details->name !="")
                                     {{$project_details->name}}
                                @endif --}}
                            </b>
                        </h3>
                    </div>
                    <div class="col-sm-12" style="border:1px solid #808080;">
                        <div class="row">
                            <div class="col-sm-6 mt-3" wire:ignore>
                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="col-sm-6 mt-3" wire:ignore>
                                <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- <div class="row">
                        <div class="col-sm-6">
                            <div id="chartContainer" wire:ignore style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="chartContainer2" wire:ignore style="height: 300px; width: 100%;"></div>
                        </div>
                    </div> --}}
                @endif
                <div class="p-2"></div>
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Date</th>
                            <th class="table-secondary">Project</th>
                            <th class="table-secondary">Employee Name</th>
                            <th class="table-secondary">Activity</th>
                            <th class="table-secondary">Activity Type</th>
                            <th class="table-secondary">Working Hrs</th>
                            <th class="table-secondary">Approved Hrs</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($timesheets)
                            @foreach ($timesheets as $key => $timesheet)
                                <tr class="text-center">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{date('d-m-Y',strtotime($timesheet->date))}}</td>
                                    <td>{{$timesheet->project->name}}</td>
                                    <td> @if ($timesheet->employee)
                                                {{$timesheet->employee->first_name}}
                                        @endif
                                    </td>
                                    <td>{{$timesheet->activity->name}}
                                    </td>
                                    <td> @if ($timesheet->activity->status == 1)
                                        {{"Billable"}}
                                    @else
                                        {{" Non Billable"}}
                                    @endif</td>
                                    <td>{{$timesheet->work_hours}} hrs</td>
                                    <td><center><input id="approved_work_hours{{$key}}" wire:model="approved_work_hours.{{$key}}" style="background: #fff;-webkit-box-shadow: none;box-shadow: none;border-radius: 6px;border: 1px solid #edeae0;padding: 6px 1px 8px 14px;height: auto;width:50px;font-size: 12px;" type="text" > hrs</center></td>
                                    <td><button class = "btn btn-primary"  wire:click="view({{$timesheet->id}})">View</button><button class = "btn btn-warning" wire:click="approve({{$timesheet->id}},{{$key}})">Approve</button></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </fieldset>
        </div>
        @endif
</div>

