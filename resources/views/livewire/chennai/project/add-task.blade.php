<div>
    <div class="page-header">
        <div class="page-title">
            <h3 >New Task</h3>
        </div>
    </div>
    <form id="msform">
        <fieldset class="mt-3">
            <div class="row">
                <div class="col-sm-6">
                    <label id="lable">Task Name</label>
                    <input type="text" class="form_input" wire:model="task_name" placeholder="Task Name">
                </div>
                <div class="col-sm-6">
                    <label id="lable">Task Status</label>
                    <div class="form_input">
                        <input type="radio" wire:model="task_status1" id="billable" name="task_status" value="Billable" placeholder="Man Hours">&nbsp<span for="billable">Billable</span>&nbsp&nbsp&nbsp
                        <input type="radio" wire:model="task_status1" name="task_status" id="non_billable" value="Non-Billable" placeholder="Man Hours">&nbsp<span for="non_billable">Non Billable</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="next action-button" wire:click="add_task()" value="Save" >
                </div>
            </div>
        </fieldset>
    </form>
</div>


