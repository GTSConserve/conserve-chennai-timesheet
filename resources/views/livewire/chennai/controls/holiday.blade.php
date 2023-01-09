<div>
    @if ($status == 0)
        <div class="page-header row">
            <div class="col-12">
                <h3><b>Holiday Controls</b></h3>
            </div>
        </div>
        <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
            <div class="card-body">
                <div class="">
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Holiday Name</label>
                            <input type="text" class="form_input" wire:model="holiday_name.0" placeholder="Holiday Name">
                        </div>
                        <div class="col-sm-2">
                            <label>Date</label>
                            <input type="date" class="form_input" wire:model="holiday_date.0" placeholder="">
                        </div>
                        <div class="col-sm-1">
                            <label>&nbsp</label>
                            <button type="button" style="margin-top:34px;text-decoration: none;" wire:click="addDiv({{$i}})" name="add" id="add"
                                class="btn btn-success">+</button>
                        </div>
                    </div>
                </div>
                <div class="">
                    @foreach($inputs as $key => $value)
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Holiday Name</label>
                                <input type="text" class="form_input" wire:model="holiday_name.{{$key+1}}" placeholder="Holiday Name">
                            </div>
                            <div class="col-sm-2">
                                <label>Date</label>
                                <input type="date" class="form_input" wire:model="holiday_date.{{$key+1}}">
                            </div>
                            <div class="col-sm-1">
                                <label>&nbsp</label>
                                <button type="button" style="margin-top:34px;" wire:click="removeDiv({{$key+1}})"
                                     class="btn btn-danger">x</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="action_button" wire:click="save()" value="Save" >
                    </div>
                </div>
            </div>
        </div>
        <div class="card component-card_1 mt-4" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
            <div class="card-body">
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Holiday</th>
                            <th class="table-secondary">Date</th>
                            <th class="table-secondary">Day</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($holday_view as $holiday)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$holiday->name}}</td>
                                <td>{{date('d-m-Y', strtotime($holiday->date))}}</td>
                                <td>{{$holiday->day}}</td>
                                <td><svg  wire:click="edit({{$holiday->id}})" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></td>
                        @endforeach
                    </tbody>
            </div>
        </div>
    @endif
    @if ($status == 1)
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Edit Holiday Controls</b></h3>
        </div>
        <div class="col-1">
            <svg wire:click="back()" style="color:#515365;font-size:15px;" xmlns="http://www.w3.org/2000/svg" width="44" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line>back</svg>
            {{-- <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" > --}}
        </div>
    </div>
    <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
        <div class="card-body" >
            <div class="row">
                <div class="col-sm-3">
                    <label>Holiday Name</label>
                    <input type="text" class="form_input" wire:model="edit_holiday_name" placeholder="Holiday Name">
                </div>
                <div class="col-sm-2">
                    <label>Date</label>
                    <input type="date" class="form_input" wire:model="edit_holiday_date" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <input type="button" name="next" class="action_button" wire:click="update()" value="Update" >
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
