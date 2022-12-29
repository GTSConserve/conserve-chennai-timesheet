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
        @if ($user_group_id == 2)
            <fieldset class="mt-3">

                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Name</label>
                        <select name="" class="form-control" id=""  wire:model="project_name">
                            {{-- <option>--Select Project--</option> --}}
                            @foreach ($projects as $project)
                                <option value="{{$project->id}}">{{$project->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6" style="text-align:justify;">
                        <label id="lable">Project Manager Head</label>
                        <div class="form-group" wire:ignore>
                        <select class="form-control" id="select2_pmh" wire:model="project_manager_head" multiple="multiple">
                            @foreach ($pm_heads as $pm_head)
                                <option value ="{{$pm_head->id}}">{{$pm_head->first_name}}</option>
                            @endforeach

                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Project Manager</label>
                        <div class="form-group" wire:ignore>
                        <select name="" class="form_input" id="select2_pm" wire:model="project_manager"  multiple>

                            {{-- <option>--Select Project Manager--</option> --}}

<<<<<<< HEAD

=======
>>>>>>> 7c9a256a54aaed547b8f34af60f294f92a152d39
                            @foreach ($project_managers as $project_manager)
                                <option value ="{{$project_manager->id}}">{{$project_manager->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Lead</label>
                        <div class="form-group" wire:ignore>
                        <select name="" class="form_input" id="select2_pl" wire:model="project_lead" multiple>

                            {{-- <option>--Select Project Lead--</option> --}}


                            @foreach ($project_leads as $project_lead)
                                <option value ="{{$project_lead->id}}">{{$project_lead->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
=======
                   
>>>>>>> 7c9a256a54aaed547b8f34af60f294f92a152d39
                </div>
               
                
            </fieldset>
        @endif
    </div>
    
    <div class="row">
        <fieldset class="mt-3 col-4">
               
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="table-secondary">Project Lead List</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($project_leads as $project_lead)
                    <tr class="text-center">
                        <td>  <div class="n-chk">
                            <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                              <input type="checkbox" class="new-control-input" wire:model="project_lead">
                              <span class="new-control-indicator">{{$project_lead->first_name}}</span>
                            </label>
                        </div></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
        <fieldset class="mt-3 col-4" >
               
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="table-secondary">Team Lead List</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($team_leads as $team_lead)
                    <tr class="text-center">

                        <td>

                            <div class="n-chk">
                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                                  <input type="checkbox" class="new-control-input" wire:model="team_lead">
                                  <span class="new-control-indicator">{{$team_lead->first_name}}</span>
                                </label>
                            </div>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
        <fieldset class="mt-3 col-4" >
              
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="table-secondary">Employee List</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($employees as $employee)
                    <tr class="text-center">
                
                        <td>
                            <div class="n-chk">
                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                                  <input type="checkbox" class="new-control-input" wire:model="employee">
                                  <span class="new-control-indicator">{{$employee->first_name}}</span>
                                </label>
                            </div>
                           
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
        
    </div>
    <div id="msform">
        <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="add()" value="Save" >
                    </div>
                </div>
</div>
</div>

<!-- @push('js')

<script>
    $(function(){
      $('#select2_pmh').select2({
        theme:'bootstrap4',
        placeholder:'Select Pmh'
      }).on('change',function(){
        @this.set('project_manager_head',$(this).val())
      });
    })
    </script>
    <script>
        $(function(){
          $('#select2_pm').select2({
            theme:'bootstrap4',
            placeholder:'Select pm'
          }).on('change',function(){
            @this.set('project_manager',$(this).val())
          });
        })
        </script>
        <script>
            $(function(){
              $('#select2_pl').select2({
                theme:'bootstrap4',
                placeholder:'Select pl'
              }).on('change',function(){
                @this.set('project_lead',$(this).val())
              });
            })
            </script>
            <script>
                $(function(){
                  $('#select2_tl').select2({
                    theme:'bootstrap4',
                    placeholder:'Select Tl'
                  }).on('change',function(){
                    @this.set('team_lead',$(this).val())
                  });
                })
                </script>
                <script>
                    $(function(){
                      $('#select2_emp').select2({
                        theme:'bootstrap4',
                        placeholder:'Select Emp'
                      }).on('change',function(){
                        @this.set('employee',$(this).val())
                      });
                    })
                    </script>
@endpush -->
