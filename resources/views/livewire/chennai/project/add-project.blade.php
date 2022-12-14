<div>
    @if ($status == 1)
        <div class="page-header row">
            <div class="col-11">
                <h3 >New Project</h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">

                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Name</label>
                        <input type="text" class="form_input" wire:model="name" placeholder="Project Name">
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Man Hours</label>
                        <input type="text" class="form_input" wire:model="man_hours" placeholder="Man Hours">
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity Mapping</label>
                        <select name="" class="form_input" id="" multiple wire:model="activity_mapping">
                            <option value="">-Select--</option>
                            @foreach ($activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="add_project()" value="Save" >
                    </div>
                </div>
            </fieldset>
        </div>

    @elseif  ($status == 2)
        <div class="page-header row">
            <div class="col-11">
                <h3 >Edit Project</h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Name</label>
                        <input type="text" class="form_input" wire:model="name" placeholder="Project Name">
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Man Hours</label>
                        <input type="text" class="form_input" wire:model="man_hours" placeholder="Man Hours">
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity Mapping</label>
                        <select name="" class="form_input" id="" multiple wire:model="activity_mapping">
                            <option value="">-Select--</option>
                            @foreach ($activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="update_project()" value="Save" >
                    </div>
                </div>
            </fieldset>
        </div>

    @else
        <div class="page-header row">
            <div class="col-11">
                <h3 >All Project</h3>
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
                            <th class="table-secondary">Project Name</th>
                            <th class="table-secondary">Man Hours</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($view_projects as $view_project)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$view_project->name}}</td>
                                <td>{{$view_project->man_hour}}</td>
                                <td><button wire:click="edit_project({{$view_project->id}})">Edit</button><button wire:click="delete_project">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
            </fieldset>
        </div>
    @endif
</div>
