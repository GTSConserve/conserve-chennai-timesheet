<div wire:init="onload()">
    <div class="page-header row">
        <div class="col-11">
            <h3 ><b>Add TimeSheet</b></h3>
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <label id="lable1">Date</label>
                    <input class = "form_input" wire:model = "date" max="{{date('Y-m-d')}}" type="date">
                    @if ($wrong_date == 1)
                        <span style="color:red">Select Only Current Date</span>
                    @endif
                    @error('date')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-sm-6">
                    <label id="lable2">Project</label>
                    <select name="" class="form_input" id="" wire:change="project_change($event.target.value)"  wire:model="project_id">
                        <option value="">Select Project</option>
                        @foreach($projects as $project)
                        <option value="{{$project->id}}">{{$project->name}}</option>
                        @endforeach
                    </select>
                    @error('project_id')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-6">

                    <label id="lable3">Task</label>
                    <select name="" class="form_input" id="" wire:change="task_change($event.target.value)"  wire:model="task_id">
                        <option value="">Select Task</option>
                        @if ($tasks)
                            @foreach($tasks as $task)
                                <option value="{{$task->task_link->id}}">{{$task->task_link->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('task_id')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                @if ($sub__task == 1)
                    <div class="col-sm-6">
                        <label>Sub Task</label>
                        <select name="" class="form_input" id=""  wire:model="sub_task1_id">
                            <option value="">Select Sub Task</option>
                            @if ($subtasks)
                                @foreach($subtasks as $subtask)
                                    <option value="{{$subtask->id}}">{{$subtask->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                @else
                <div class="col-sm-6"></div>
                @endif

                {{-- <div class="col-sm-6">
                    <label id="lable">Sub Tasks 2</label>
                    <select name="" class="form_input" id=""  wire:model="sub_task2_id">
                        <option value="">Select Sub Task</option>
                        @foreach($subtasks2 as $subtask2)
                        <option value="{{$subtask2->id}}">{{$subtask2->name}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="col-sm-6">
                    <label id="lable4">Activity</label>

                    <select name="" class="form_input" id=""  wire:model="activity_id">
                        <option value="">Select Activity</option>

                        @if ($activities)
                            @foreach($activities as $activity)
                                <option value="{{$activity->activity->id}}">{{$activity->activity->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('activity_id')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    <label id="lable5">Working Hours</label>
                    <input class="form_input" type="text" wire:model="work_hours" style="width:125px;">
                    @error('work_hours')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-6">
                    <label id="lable6">Description</label>
                    <textarea name="" class="form_input" wire:model="description" id=""></textarea>
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
