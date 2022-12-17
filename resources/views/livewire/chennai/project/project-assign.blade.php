<div>
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Project Assign</b></h3>
        </div>
        <div class="col-1">
            {{-- <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" > --}}
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Name</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Project--</option>
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Manager Head</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Project Manager Head--</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Manager</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Project Manager--</option>
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Lead</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Project Lead--</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Team Lead</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Team Lead--</option>
                        </select>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Employee</label>
                        <select name="" class="form_input" id="">
                            <option>--Select Employee--</option>
                        </select>
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
