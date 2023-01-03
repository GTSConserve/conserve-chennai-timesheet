<div>
    @if ($status == 1)
        <div>
            <div class="page-header row">
                <div class="col-11">
                    <h3><b>New Activity</b></h3>
                </div>
                <div class="col-1">
                    <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
                </div>
            </div>
            <form id="msform">
                <fieldset class="mt-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label id="lable">Activity Name</label>
                            <input type="text" class="form_input" wire:model="activity_name" placeholder="Task Name">
                            @error('activity_name')
                                <span class='error text-danger'>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label id="lable">Activity Status</label>
                            <div class="form_input">
                                <input type="radio" wire:model="activity_status" id="billable" name="activity_status" value="1">&nbsp<span for="billable">Billable</span>&nbsp&nbsp&nbsp
                                <input type="radio" wire:model="activity_status" name="activity_status" id="non_billable" value="0">&nbsp<span for="non_billable">Non Billable</span>
                            </div>
                            @error('activity_status')
                                <span class='error text-danger'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <input type="button" name="next" class="next action-button" wire:click="add_activity()" value="Save" >
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    @elseif($status == 2)
        <div>
            <div class="page-header row">
                <div class="col-11">
                    <h3>Edit Activity</h3>
                </div>
                <div class="col-1">
                    <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" >
                </div>
            </div>
            <form id="msform">
                <fieldset class="mt-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label id="lable">Activity Name</label>
                            <input type="text" class="form_input" wire:model="update_activity_name" placeholder="Task Name">
                        </div>
                        <div class="col-sm-6">
                            <label id="lable">Activity Status</label>
                            <div class="form_input">
                                <input type="radio" wire:model="update_activity_status" id="billable" name="update_activity_status" value="1" placeholder="Man Hours">&nbsp<span for="billable">Billable</span>&nbsp&nbsp&nbsp
                                <input type="radio" wire:model="update_activity_status" name="update_activity_status" id="non_billable" value="0" placeholder="Man Hours">&nbsp<span for="non_billable">Non Billable</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <input type="button" name="next" class="next action-button" wire:click="update()" value="Save" >
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    @else
    <div>
        <div class="page-header row">
            <div class="col-11">
                <h3><b>All Activity</b></h3>
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
                            <th class="table-secondary">Activities</th>
                            <th class="table-secondary">Activity Type</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$activity->name}}</td>
                                @if ($activity->status == 1)
                                <td>{{"Billable"}}</td>
                                @else
                                <td>{{"Non Billable"}}</td>
                                @endif
                                <td><button class = "btn btn-primary" wire:click="edit({{$activity->id}})">Edit</button><button class = "btn btn-warning" wire:click="delete({{$activity->id}})">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
            </fieldset>
        </div>
    </div>
    @endif
</div>
