<div>
    <div>
        <div class="page-header row">
            <div class="col-12">
                <h3><b>Add Latest Project</b></h3>
            </div>
        </div>
        <div id="msform">
            <fieldset class="mt-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Date</label>
                        <input type="date" class="form_input" wire:model="date" placeholder="Date">
                        @error('date')
                            <span class='error text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label id="lable">Title</label>
                        <input type="text" class="form_input" wire:model="title" placeholder="Title">
                        @error('title')
                            <span class='error text-danger'>{{ $message }}</span>
                        @enderror
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
        <div id="msform">
            <fieldset class="mt-3">
                <table id="zero-config1" class="table" style="width:100%;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-secondary">S.No</th>
                            <th class="table-secondary">Date</th>
                            <th class="table-secondary">Title</th>
                            <th class="table-secondary">Status</th>
                            <th class="table-secondary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latest_projects as $latest_project)
                            <tr class="text-center">
                                <td>{{$loop->index+1}}</td>
                                <td>{{$latest_project->date}}</td>
                                <td>{{$latest_project->title}}</td>
                                <td><input type="checkbox" wire:click="status({{$latest_project->id}},)" @if ($latest_project->status == 1) checked @endif></td>
                                <td><svg xmlns="http://www.w3.org/2000/svg" wire:click="delete({{$latest_project->id}})" width="20" color="" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                            </tr>
                        @endforeach
                    </tbody>
            </fieldset>
        </div>
    </div>
</div>
