<div>
    @if ($status == 1)
        <div>
            <div class="page-header row">
                <div class="col-11">
                    <h3><b>New Task</b></h3>
                </div>
                <div class="col-1">
                    <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
                </div>
            </div>
            <div id="msform">
                <fieldset class="mt-3">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-6">
                                <label id="lable">Task Name</label>
                                <input type="text" class="form_input" wire:model="task_name" placeholder="Task Name">
                                @error('task_name')
                                <span class='error text-danger'>{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-sm-6" style="text-align:justify;">
                                <div class="trre" style="margin-top:21px;">
                                    <label id="lable">Sub Task</label>
                               </div>
                                <div class="">
                                    <input type="radio" wire:model="sub_task_status" wire:click="sub_task_yes()" id="yes" name="sub_task_status" value="1" >&nbsp<span for="yes">Yes</span>&nbsp&nbsp&nbsp
                                    <input type="radio" wire:model="sub_task_status" wire:click="sub_task_no()" name="sub_task_status" id="no" value="0">&nbsp<span for="no">No</span>
                               </div>
                                @error('sub_task_status')
                                    <span class='error text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"></div>
                                @if ($sub_task == 1)
                                    <div class="col-sm-5">
                                        <label id="lable">Sub Task Name</label>
                                        <input type="text" class="form_input" wire:model="sub_account_name.0" placeholder="Task Name">
                                    </div>
                                    <div class="col-sm-1">
                                        <label id="lable">&nbsp</label>
                                        <input type="button" style="margin-top:34px;" wire:click="addDiv({{$i}})" class="btn btn-success" value="+">
                                    </div>
                                    @foreach($inputs as $key => $value)
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-5">
                                            <label id="lable">Sub Task Name</label>
                                            <input type="text" class="form_input" wire:model="sub_account_name.{{$key+1}}" placeholder="Task Name">
                                        </div>
                                        <div class="col-sm-1">
                                            <label id="lable">&nbsp</label>
                                            @if ($i!=0)
                                            <input type="button" style="margin-top:34px;" wire:click="removeDiv({{$i}})" class="btn btn-danger" value="x">
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                <div class="col-sm-6">
                                    <label id="lable">&nbsp</label>
                                    <div></div>
                                </div>
                                @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <input type="button" name="next" class="next action-button" wire:click="add_task()" value="Save" >
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    @elseif($status == 2)
    <div>
        <div class="page-header row">
            <div class="col-11">
                <h3><b>Edit Task</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <label id="lable">Task Name</label>
                            <input type="text" class="form_input" wire:model="edit_task_name" placeholder="Task Name">
                        </div>
                        <div class="col-sm-6" style="text-align:justify;">
                            <div class="trre" style="margin-top:21px;">
                                <label id="lable">Sub Task</label>
                           </div>
                            <div class="">
                                <input type="radio" wire:model="edit_sub_task_status" wire:click="edit_sub_task_yes()" id="yes" name="sub_task_status" value="1" >&nbsp<span for="yes">Yes</span>&nbsp&nbsp&nbsp
                                <input type="radio" wire:model="edit_sub_task_status" wire:click="edit_sub_task_no()" name="sub_task_status" id="no" value="0">&nbsp<span for="no">No</span>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"></div>
                            @if ($edit_sub_task == 1)
                                <div class="col-sm-5">
                                    <label id="lable">Sub Task Name</label>
                                    <input type="text" class="form_input" wire:model="edit_sub_account_name.0" placeholder="Task Name">
                                </div>
                                <div class="col-sm-1">
                                    <label id="lable">&nbsp</label>
                                    <input type="button" style="margin-top:34px;" wire:click="edit_addDiv({{$edit_i}})" class="btn btn-success" value="+">
                                </div>
                                @foreach($edit_inputs as $key => $value)
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-5">
                                        <label id="lable">Sub Task Name</label>
                                        <input type="text" class="form_input" wire:model="edit_sub_account_name.{{$key+1}}" placeholder="Task Name">
                                    </div>
                                    <div class="col-sm-1">
                                        <label id="lable">&nbsp</label>
                                        @if ($edit_i != 0)
                                        <input type="button" style="margin-top:34px;" wire:click="edit_removeDiv({{$edit_i}})" class="btn btn-danger" value="x">
                                        @endif
                                    </div>
                                @endforeach
                            @else
                            <div class="col-sm-6">
                                <label id="lable">&nbsp</label>
                                <div></div>
                            </div>
                            @endif

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="update()" value="Save" >
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    @else
    <div>
        <div class="page-header row">
            <div class="col-11">
                <h3><b>All Task</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="add()" value="Add" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Task</th>
                            <th class="table-secondary">Sub Task Count</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($task_views as $task_view)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$task_view->name}}</td>
                                @if ($task_view->sub_task_count->count() != "")
                                <td>{{$task_view->sub_task_count->count()}}</td>
                                @endif
                                <td style="width:100px;"><button class="btn btn-primary" wire:click="edit({{$task_view->id}})">Edit</button><button class="btn btn-warning" wire:click="delete({{$task_view->id}})">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
            </fieldset>
        </div>
    </div>
    @endif
</div>
