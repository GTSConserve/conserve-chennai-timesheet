<div wire:init="onload">
    <div class="page-header row">
        <div class="col-11">
            {{-- <h3><b>Timesheet Dashboard</b></h3> --}}
        </div>
        <div class="col-1">
            {{-- <input type="button" name="next" class="btn btn-warning" wire:click="add()" value="Add" > --}}
        </div>
    </div>
    <div class="card component-card_1">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div id="billable_dashboard_chart" style="height: 300px; width: 100%;"></div>
                </div>
                <div class="col-sm-6">
                    <div id="non_billable_dashboard_chart" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
