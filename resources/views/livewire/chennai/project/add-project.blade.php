<div>
    <div class="page-header">
        <div class="page-title">
            <h3 >New Project</h3>
        </div>
    </div>
    <form id="msform">
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
    </form>
</div>
