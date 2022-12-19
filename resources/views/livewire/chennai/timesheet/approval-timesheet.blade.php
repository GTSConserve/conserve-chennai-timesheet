<div>
      @if($status == 1)
        <div class="page-header row">
            <div class="col-11">
                <h3><b>View Timesheet Approval</b></h3>
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
      @else
        <div class="page-header row">
            <div class="col-11">
                <h3><b>Timesheet Approval</b></h3>
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
                            <td><button class = "btn btn-primary" wire:click="view({{$timesheet->id}})">View</button><button class = "btn btn-warning" wire:click="approve({{$timesheet->id}})">Approve</button></td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
            </fieldset>
        </div>
        @endif
</div>

