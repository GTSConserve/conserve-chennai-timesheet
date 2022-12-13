<div>
    @if ($status_group == 1)
    <div class="">
        <div class="page-header">
            <div class="page-title">
                <h3 >All Employee</h3>
            </div>
        </div>
    </div>
    {{-- <div class="layout-px-spacing"> --}}
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table" style="width:100%;">
                            <thead>
                                <tr class="text-center">
                                    <th class="table-secondary">S.No</th>
                                    <th class="table-secondary">Name</th>
                                    <th class="table-secondary">Gender</th>
                                    <th class="table-secondary">Email ID</th>
                                    <th class="table-secondary">Mobile number</th>
                                    <th class="table-secondary"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employee_lists as $employee_list)
                                <tr class="text-center">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$employee_list->first_name}}</td>
                                    <td>{{$employee_list->gender}}</td>
                                    <td>{{$employee_list->user_name}}</td>
                                    <td>{{$employee_list->phone_no}}</td>
                                 {{-- <td><img src="assets/img/eye.svg" wire:click="view_employee()" class="navbar-logo" alt="logo"><img src="assets/img/edit.svg" class="navbar-logo" alt="logo"></td> --}}
                                    <td><button class="btn btn-primary" wire:click="view_employee({{$employee_list->id}})">view</button>
                                    <button class="btn btn-warning" wire:click="edit_employee({{$employee_list->id}})">Edit</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    @endif
    @if ($status_group == 2)  <!--View Employee-->
        @include('livewire.chennai.employee.view-employee')
    @endif
    @if ($status_group == 3) <!--Edit Employee-->
        @include('livewire.chennai.employee.edit-employee')
    @endif
</div>
