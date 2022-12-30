<div wire:init="onload">
    <div class="page-header row">
        <div class="col-12">
            <h3><b>Controlls</b></h3>
        </div>
    </div>
    <div id="msform">
        <fieldset class="mt-3">
            <div class="row">
                <div class="col-sm-12">
                    <label id="lable">Announcement</label>
                    <textarea class="form_input" wire:model="announcement" placeholder="Announcement"></textarea>
                </div>
                <div class="col-sm-12">
                    <label id="lable">Engineering Quote</label>
                    <input type="text" class="form_input" wire:model="engineering_quote" placeholder="Engineering Quote">
                </div>
                <div class="col-sm-12">
                    <label id="lable">Ethics Quote</label>
                    <input type="text" class="form_input" wire:model="ethics_quote" placeholder="Ethics Quote">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="next action-button" wire:click="save()" value="Save" >
                </div>
            </div>
        </fieldset>
    </div>
</div>

