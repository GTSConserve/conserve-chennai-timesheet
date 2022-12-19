<div>
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
</div>
