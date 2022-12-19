<div>
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
                              <td>{{$timesheet->user_id}}</td>
                              <td>
                                @if ($timesheet->employee)
                                    {{$timesheet->employee->first_name}}
                                @endif
                                </td>
                              <td>{{$timesheet->activity->name}}</td>
                              <td>{{$timesheet->work_hours}}</td>
                              <td><button class = "btn btn-primary" wire:click="edit()">View</button><button class = "btn btn-warning" wire:click="delete()">Approve</button></td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
            </fieldset>
        </div>
    </div>

