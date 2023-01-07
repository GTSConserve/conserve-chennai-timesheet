<div>
    @if ($status == 0)
        <div class="page-header row">
            <div class="col-12">
                <h3><b>Shift Controls</b></h3>
            </div>
        </div>
        <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Shift Name</label>
                        <input type="text" class="form_input" wire:model="shift" placeholder="Shift Name">
                        @error('shift')
                            <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-2">
                        <label>Start&nbspTime</label>
                        <input type="time" class="form_input" wire:model="start_time" placeholder="">
                        @error('start_time')
                            <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-2">
                        <label>End&nbspTime</label>
                        <input type="time" class="form_input" wire:model="end_time" placeholder="">
                        @error('end_time')
                            <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
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
                            <th class="table-secondary">Shift Name</th>
                            <th class="table-secondary">Start Time</th>
                            <th class="table-secondary">End Time</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($shift_view as $shift)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$shift->shift}}</td>
                                <td>{{date('g:i A', strtotime($shift->start_time))}}</td>
                                <td>{{date('g:i A', strtotime($shift->end_time))}}</td>
                                <td><svg  wire:click="edit({{$shift->id}})" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></td>
                        @endforeach
                    </tbody>
            </div>
        </div>
    @endif
    @if ($status == 1)
    <div class="page-header row">
        <div class="col-11">
            <h3><b>Edit Shift Controls</b></h3>
        </div>
        <div class="col-1">
            <svg wire:click="back()" style="color:#515365;font-size:15px;" xmlns="http://www.w3.org/2000/svg" width="44" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line>back</svg>
            {{-- <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" > --}}
        </div>
    </div>
    <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
        <div class="card-body" >
            <div class="row">
                <div class="col-sm-4">
                    <label>Shift Name</label>
                    <input type="text" class="form_input" wire:model="edit_shift" placeholder="Shift Name">
                    @error('edit_shift')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    <label>Start&nbspTime</label>
                    <input type="time" class="form_input" wire:model="edit_start_time" placeholder="">
                    @error('edit_start_time')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    <label>End&nbspTime</label>
                    <input type="time" class="form_input" wire:model="edit_end_time" placeholder="">
                    @error('edit_end_time')
                        <span class='error text-danger'>{{ $message }}</span>
                    @enderror
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
