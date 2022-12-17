<div>
        <div class="page-header row">
            <div class="col-11">
                <h3 ><b>New Project</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
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
                        <label id="lable">Activity</label>
                        <select name="" class="form_input" id=""  wire:model="activity_id">
                           <option value="">Select Activity</option>
                           @foreach($activities as $activity)
                           <option value="{{$activity->id}}">{{$activity->name}}</option>
                           @endforeach
                           </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Tasks</label>
                        <select name="" class="form_input" id=""  wire:model="task_id">
                           <option value="">Select Task</option>
                           @foreach($tasks as $task)
                           <option value="{{$task->id}}">{{$task->name}}</option>
                           @endforeach
                           </select>
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Sub Tasks</label>
                        <select name="" class="form_input" id=""  wire:model="sub_task_id">
                           <option value="">Select Sub Task</option>
                           @foreach($subtasks as $subtask)
                           <option value="{{$subtask->id}}">{{$subtask->name}}</option>
                           @endforeach
                           </select>
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Description</label>
                        <textarea class="form-control" type="text" wire:model="description" ></textarea>
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">Start Time</label>
                        <input class="form-control" type="time" wire:model="start_time">
                    </div>
                    <div class="col-sm-6">
                    <label id="lable">End Time</label>
                        <input class="form-control" type="time" wire:model="end_time">
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
        <div class="page-header row">
            <div class="col-11">
                <h3 ><b>All Project</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="add()" value="Add" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <table id="zero-config" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Project</th>
                            <th class="table-secondary">Description</th>
                          
                        </tr>
                    </thead>
                    @foreach($timesheets as $timesheet)
                    <tbody>
                        <td class="text-center">{{$loop->index+1}}</td>
                        <td  class="text-center">{{$timesheet->project->name}}</td>
                        <td  class="text-center">{{$timesheet->description}}</td>
                       
                    </tbody>
                    @endforeach
            </fieldset>
        </div>
    
</div>
