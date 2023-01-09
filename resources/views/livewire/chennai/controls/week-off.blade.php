<div>
    @if ($status == 0)
        <div class="page-header row">
            <div class="col-12">
                <h3><b>Week-Off Controls</b></h3>
            </div>
        </div>
        <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Name</label>
                        <input type="text" class="form_input" wire:model="name" placeholder="Name">
                        @error('name')
                            <span class='error text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <label>Day</label>
                        <select class="form_input" id="day" wire:model="days">
                            <option value="">--Select Day--</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Type</label>
                        <select name="" class="form_input" wire:model="week_off_type">
                            <option value="">--Select Status--</option>
                            <option value="0">All</option>
                            <option value="1">1st and 3rd</option>
                            <option value="2">2nd and 4th</option>
                        </select>
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
                {{-- <div class="row">
                    <div class="col-sm-1">
                        <select name="" class="form_input" id="" >
                            <option value="0">All</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                    <div class="col-sm-9"></div>
                    <div class="col-sm-2">
                        <input class="form_input" type="search" wire:keypress = "search()" wire:model ="search"placeholder="Search">
                    </div>
                </div> --}}
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Name</th>
                            <th class="table-secondary">Days</th>
                            <th class="table-secondary">Type</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($week_off_views as $week)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$week->name}}</td>
                                <td>{{$week->days}}</td>
                                <td>
                                    @if ($week->type == 0)
                                        All {{$week->days}}s
                                    @endif
                                    @if ($week->type == 1)
                                        1st & 3rd {{$week->days}}s
                                    @endif
                                    @if ($week->type == 2)
                                        2nd & 4th {{$week->days}}s
                                    @endif
                                </td>
                                <td><svg  wire:click="edit({{$week->id}})" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></td>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="paginating-container pagination-default">
                    <ul class="pagination">
                        <li class="prev"><a href="javascript:void(0);">Prev</a></li>
                        <li><a href="javascript:void(0);">1</a></li>
                        <li class="active"><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);">Next</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    @endif
    @if ($status == 1)
        <div class="page-header row">
            <div class="col-11">
                <h3><b>Week-Off Controls Edit</b></h3>
            </div>
            <div class="col-1">
                <svg wire:click="back()" style="color:#515365;font-size:15px;" xmlns="http://www.w3.org/2000/svg" width="44" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 8 12 12 16"></polyline><line x1="16" y1="12" x2="8" y2="12"></line>back</svg>
                {{-- <input type="button" name="next" class="btn btn-warning" wire:click="back()" value="Back" > --}}
            </div>
        </div>
        <div class="card component-card_1" style="box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.4);">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Name</label>
                        <input type="text" class="form_input" wire:model="edit_name" placeholder="Name">
                        @error('edit_name')
                            <span class='error text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3">
                        <label>Day</label>
                        <select class="form_input" id="day" wire:model="edit_days">
                            <option value="">--Select Day--</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Type</label>
                        <select name="" class="form_input" wire:model="edit_week_off_type">
                            <option value="">--Select Status--</option>
                            <option value="0">All</option>
                            <option value="1">1st and 3rd</option>
                            <option value="2">2nd and 4th</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="action_button" wire:click="update()" value="Save" >
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
