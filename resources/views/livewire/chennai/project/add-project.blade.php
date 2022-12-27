<div>
    @if ($status == 1)
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
                        <label id="lable">Project Name</label>
                        <input type="text" class="form_input" wire:model="name" placeholder="Project Name">
                    </div>
                    <div class="col-sm-6">
                        <center><label id="lable">Man Hours</label></center>
                        <div class="row">
                            <div class="col-3">
                                <label id="lable" style="padding-top: 7px;">Billable</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form_input text-left" wire:model="billable_man_hours" placeholder="Billable">
                            </div>
                            <div class="col-3">
                                <label id="lable" style="padding-top: 7px;">Non&nbspBillable</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form_input" wire:model="non_billable_man_hours" placeholder="Non Billable">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity Mapping</label>
                        <select name="" class="form_input form-small tagging" id="" multiple wire:model="activity_mapping">
                            <option value="">-Select--</option>
                            @foreach ($activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Task Mapping</label>
                        <select name="" class="form_input form-small tagging" id="" multiple wire:model="task_mapping">
                            <option value="">-Select--</option>
                            @foreach ($tasks as $task)
                            <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                        </select>
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
                <h3 ><b>Edit Project</b></h3>
            </div>
            <div class="col-1">
                <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="" >Project Name</label>
                        <input type="text" class="form_input" wire:model="update_name" placeholder="Project Name">
                    </div>
                    <div class="col-sm-6">
                        <center><label id="lable">Man Hours</label></center>
                        <div class="row">
                            <div class="col-3">
                                <label id="lable" style="padding-top: 7px;">Billable</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form_input text-left" wire:model="update_billable_man_hours" placeholder="Billable">
                            </div>
                            <div class="col-3">
                                <label id="lable" style="padding-top: 7px;">Non&nbspBillable</label>
                            </div>
                            <div class="col-3">
                                <input type="number" class="form_input" wire:model="update_non_billable_man_hours" placeholder="Non Billable">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity Mapping</label>
                        <select name="" class="form_input" id="" multiple wire:model="update_activity_mapping">
                            <option value="">-Select--</option>
                            @foreach ($activities as $activity)
                            <option value="{{$activity->id}}">{{$activity->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Task Mapping</label>
                        <select name="" class="form_input" id="" multiple wire:model="update_task_mapping">
                            <option value="">-Select--</option>
                            @foreach ($tasks as $task)
                            <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="update_project()" value="Update" >
                    </div>
                </div>
            </fieldset>
        </div>

    @else
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
                <table id="zero-config1" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th rowspan="2" class="table-secondary">S.No</th>
                            <th rowspan="2" class="table-secondary">Project Name</th>
                            <th class="table-secondary">Man Hours</th>
                            <th rowspan="2" class="table-secondary">Activity Count</th>
                            <th rowspan="2" class="table-secondary">Task Count</th>
                            <th rowspan="2" class="table-secondary">Action</th>
                        </tr>
                        <tr>
                            {{-- <th>Billable</th>
                            <th>Non Billable</th> --}}
                            <th>
                                <center>
                                    <table class="table-bordered" style="border:none">
                                        <center>
                                            <tr>
                                                <th  class="table">Billable</th>
                                                <th  class="table">Non Billable</th>
                                            </tr>
                                        </center>
                                    </table>
                                </center>
                            </th>
                            {{-- <th>

                                    <table>

                                            <tr>
                                                <center><th style="border:none" class="table">Billable</th></center>
                                                <center><th style="border:none" class="table">Non Billable</th></center>
                                            </tr>

                                    </table>

                            </th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($view_projects as $view_project)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$view_project->name}}</td>
                                <td>
                                    <center>
                                        <table>
                                            <center>
                                                <tr style="border:none;">
                                                    <center><td style="border:none;" class="table">
                                                        @if ($view_project->billable_man_hour != "")
                                                            {{$view_project->billable_man_hour}}
                                                        @else
                                                        0
                                                        @endif
                                                    </td></center>
                                                    <center><td style="border:none;" class="table">
                                                        @if ($view_project->non_billable_man_hour != "")
                                                        {{$view_project->non_billable_man_hour}}
                                                    @else
                                                    0
                                                    @endif
                                                    </td></center>
                                                </tr>
                                            </center>
                                        </table>
                                    </center>
                                </td>
                                <td>{{$view_project->mapping_view->count()}}</td>
                                {{-- <td>
                                    <center>
                                        <table>
                                            <center>
                                                <tr style="border:none;">
                                                    <center><td style="border:none;" class="table">{{$view_project->billable_man_hour}}</td></center>
                                                    <center><td style="border:none;" class="table">{{$view_project->non_billable_man_hour}}</td></center>
                                                </tr>
                                            </center>
                                        </table>
                                    </center>
                                </td> --}}
                                <td>{{$view_project->task_mapping->count()}}</td>
                                <td><button wire:click="edit_project({{$view_project->id}})" class="btn btn-primary">Edit</button><button wire:click="delete_project" class="btn btn-warning">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </fieldset>
        </div>
    @endif
</div>
