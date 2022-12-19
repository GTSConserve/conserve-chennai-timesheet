<div>
    @if($status == 1)
        <div class="page-header row">
            <div class="col-11">
                <h3><b>View Approved Timesheet</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-3">
                        <lable>Project</lable>
                    </div>
                    <div class="col-sm-3">
                        @if ($views->project)
                        <p>{{$views->project->name}}</p>
                        @endif
                    </div>
                    <div class="col-sm-3">
                        <lable>Employee Name</lable>
                    </div>
                    <div class="col-sm-3">
                        @if ($views->employee)
                        <p>{{$views->employee->first_name}}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <lable>Role</lable>
                    </div>
                    <div class="col-sm-3">
                        @if ($views->user_group)
                        <p>{{$views->user_group->name}}</p>
                        @endif
                    </div>
                    <div class="col-sm-3">
                        <lable>Activity Type</lable>
                    </div>
                    <div class="col-sm-3">
                        @if ($views->activity)
                        <p>{{$views->activity->name}}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <lable>Working Hours</lable>
                    </div>
                    <div class="col-sm-3">
                        @if ($views->work_hours)
                        <p>{{$views->work_hours}}</p>
                        @endif
                    </div>
                </div>
            </fieldset>
        </div>
    @elseif ($status == 2)
        <div class="page-header row">
            <div class="col-11">
                <h3 ><b>Add TimeSheet</b></h3>
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project</label>
                        <select name="" class="form_input" id=""  wire:model="project_id">
                            <option value="">Select Project</option>
                            @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Task</label>
                        <select name="" class="form_input" id=""  wire:model="task_id">
                            <option value="">Select Task</option>
                            @foreach($tasks as $task)
                            <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Sub Task 1</label>
                        <select name="" class="form_input" id=""  wire:model="sub_task1_id">
                            <option value="">Select Sub Task</option>
                            @foreach($subtasks as $subtask)
                            <option value="{{$subtask->id}}">{{$subtask->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Sub Tasks 2</label>
                        <select name="" class="form_input" id=""  wire:model="sub_task2_id">
                            <option value="">Select Sub Task</option>
                            @foreach($subtasks2 as $subtask2)
                            <option value="{{$subtask2->id}}">{{$subtask2->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity</label>
                        <select name="" class="form_input" id=""  wire:model="activity_id">
                            <option value="">Select Activity</option>
                            @foreach($activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Description</label>
                        <input type ="text" class="form_input" type="text" wire:model="description" >
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Working Hours</label>
                        <input class="form_input" type="text" wire:model="work_hours">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="submit" value="Save" >
                    </div>
                </div>
            </fieldset>
        </div>
    @else
        <div class="page-header row">
            <div class="col-11">
                <h3><b>Pending Timesheet</b></h3>
            </div>
            <div class="col-1">
                {{-- <input type="button" name="next" class="btn btn-warning" wire:click="add()" value="Add" > --}}
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <table id="zero-config" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Project</th>
                            <th class="table-secondary">Employee Name</th>
                            <th class="table-secondary">Role</th>
                            <th class="table-secondary">Activity Type</th>
                            <th class="table-secondary">Working Hrs</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($timesheets)
                        @foreach ($timesheets as $timesheet)
                            <tr class="text-center">
                            <td>{{$loop->index+1}}</td>
                            <td>{{$timesheet->project->name}}</td>
                            <td> @if ($timesheet->employee)
                                        {{$timesheet->employee->first_name}}
                                    @endif
                            </td>
                            <td>
                                @if ($timesheet->user_group)
                                    {{$timesheet->user_group->name}}
                                @endif
                            </td>
                            <td>{{$timesheet->activity->name}}</td>
                            <td>{{$timesheet->work_hours}}</td>
                            <td><button class = "btn btn-primary" wire:click="view({{$timesheet->id}})">View</button><button class = "btn btn-warning" wire:click="edit({{$timesheet->id}})">Edit</button></td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
            </fieldset>
        </div>
    @endif
</div>

