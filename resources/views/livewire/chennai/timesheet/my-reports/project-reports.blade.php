<div >
    @if ($status == 1 || $status == 0)
        <div class="">
            <div class="page-header row">
                <div class="col-11">
                    <h3><b>My Reports - Project Wise</b></h3>
                </div>
            </div>
            <div class="card component-card_1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <lable><b>Project</b></lable>
                            <select name="" class="form_input" wire:change="search()" wire:model="project_id">
                                <option value="">Select Project</option>
                                    @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="mt-1">
                                {{-- <input type="button" name="submit" style="width:100px;height:40px;" class="green-button mt-3" wire:click="search()" value="Submit" /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="">
        <div class="page-header row">
            <div class="col-11">
                <h3><b>View Timesheet</b></h3>
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
                            <input type="text" style="color:black;" class="form_input" value="{{ date('d-m-Y',strtotime($view_approval->date))}}" readonly>
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
                    <div class="col-sm-2">
                        <lable><B>Approved Hours</B></lable>
                    </div>
                    <div class="col-sm-4">
                        @if ($view_approval)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->approved_work_hours}} hrs" readonly>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3"></div>
        <div class="card component-card_1">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <lable><B>Approved By</B></lable>
                    </div>
                    <div class="col-sm-4">
                        @if ($view_approval)
                            <input type="text" style="color:black;" class="form_input" value="{{$view_approval->user->name}}" readonly>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        <lable><B>Approved On</B></lable>
                    </div>
                    <div class="col-sm-4">
                        @if ($view_approval)
                            <input type="text" style="color:black;" class="form_input" value="{{date('d-m-Y',strtotime($view_approval->approved_date))}}" readonly>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <lable><B>Employee Name</B></lable>
                    </div>
                    <div class="col-sm-4">
                        @if ($view_approval)
                            <input type="text" class="form_input" value="{{$view_approval->user->name}}" readonly>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3"></div>
    </div>
    @endif
    @if ($status == 1)
        <div class="">
            <div class="card component-card_1 p-4">
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col-sm-12" style="background:#78bb33;border:1px solid black;border-bottom:none;">
                            <h3 class="text-center p-1" style="color:#fff;">
                                <b>
                                    @if ($project_details->name !="")
                                        {{$project_details->name}}
                                    @endif
                                </b>
                            </h3>
                        </div>
                        <div class="col-sm-12" style="border:1px solid black;">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6 mt-3">
                                    <div id="myreport_chart" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5><b>Time Sheet Details</b></h5>
                        <table id="zero-config1" class="table mt-2" style="width:100%;">
                            <thead>
                                <tr class="text-center p-3">
                                    <th class="table-secondary">S.No</th>
                                    <th class="table-secondary">Date</th>
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
                                            <td>{{date('d-m-Y',strtotime($timesheet->date))}}</td>
                                            <td>
                                                @if ($timesheet->activity->status == 1)
                                                    {{"Billable"}}
                                                @else
                                                    {{"Non Billable"}}
                                                @endif
                                            </td>
                                            <td>{{$timesheet->work_hours}} hrs</td>
                                            <td>{{$timesheet->approved_work_hours}} hrs</td>
                                            <td>{{$timesheet->user->name}}</td>
                                            <td><button class = "btn btn-primary" wire:click="view({{$timesheet->id}})">View</button></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
