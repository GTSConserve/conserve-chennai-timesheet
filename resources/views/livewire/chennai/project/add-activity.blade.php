<div>
    <div>
        <div class="page-header">
            <div class="page-title">
                <h3 >New Activity</h3>
            </div>
        </div>
        <form id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Activity Name</label>
                        <input type="text" class="form_input" wire:model="activity_name" placeholder="Task Name">
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Activity Status</label>
                        <div class="form_input">
                            <input type="radio" wire:model="activity_status" id="billable" name="activity_status" value="0" placeholder="Man Hours">&nbsp<span for="billable">Billable</span>&nbsp&nbsp&nbsp
                            <input type="radio" wire:model="activity_status" name="activity_status" id="non_billable" value="1" placeholder="Man Hours">&nbsp<span for="non_billable">Non Billable</span>
                        </div>
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
</div>
