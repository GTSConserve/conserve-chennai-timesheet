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
                {{-- <div id="kt_docs_fullcalendar_background_events">Calender</div> --}}
                {{-- <div class="col-sm-6">
                    <div >
                        <table class="table table-bordered border-primary">
                            <tr>
                                <th style="border:1px solid black;">Sunday</th>
                                <th style="border:1px solid black;">Monday</th>
                                <th style="border:1px solid black;">Tuesday</th>
                                <th style="border:1px solid black;">Wednesday</th>
                                <th style="border:1px solid black;">Thursday</th>
                                <th style="border:1px solid black;">Firday</th>
                                <th style="border:1px solid black;">Saturday</th>
                            </tr>
                            <tr>
                                @for ($i = 1 ; $i <= 7; $i++)
                                <td style="border:1px solid black;" wire:click="date({{$i}})">{{$i}}</td>
                                @endfor
                            </tr>
                            <tr>
                                @for ($i; $i <= 14; $i++)
                                <td style="border:1px solid black;" wire:click="date({{$i}})">{{$i}}</td>
                                @endfor
                            </tr>
                            <tr>
                                @for ($i; $i <= 21; $i++)
                                <td style="border:1px solid black;" wire:click="date({{$i}})">{{$i}}</td>
                                @endfor
                            </tr>
                        </table>
                    </div>
                </div> --}}
                <div class="col-sm-6">

                </div>
            </div>
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
