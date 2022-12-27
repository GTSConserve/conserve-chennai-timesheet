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
                        <select name="" class="form_input" id="" style="height:50px;" wire:model="project_name">
                            <option>--Select Project--</option>
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
                            <option>--Select Project Manager--</option>
                            @foreach ($project_managers as $project_manager)
                                <option value ="{{$project_manager->id}}">{{$project_manager->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Project Lead</label>
                        <div class="form-group" wire:ignore>
                        <select name="" class="form_input" id="select2_pl" wire:model="project_lead" multiple>
                            <option>--Select Project Lead--</option>
                            @foreach ($project_leads as $project_lead)
                                <option value ="{{$project_lead->id}}">{{$project_lead->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="lable">Team Lead</label>
                        <div class="form-group" wire:ignore>
                        <select name="" class="form_input" id="select2_tl" wire:model="team_lead" multiple>
                            <option>--Select Team Lead--</option>
                            @foreach ($team_leads as $team_lead)
                                <option value ="{{$team_lead->id}}">{{$team_lead->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-sm-6" style="text-align:justify;">
                        <label id="lable">Employee</label>
                        <div class="form-group" wire:ignore>
                        <select name="" class="form_input"id="select2_emp" wire:model="employee" multiple>
                            <option>--Select Employee--</option>
                            @foreach ($employees as $employee)
                                <option value ="{{$employee->id}}">{{$employee->first_name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <input type="button" name="next" class="next action-button" wire:click="add()" value="Save" >
                    </div>
                </div>
            </fieldset>
        @endif
    </div>
</div>

@push('js')

<script>
    $(function(){
      $('#select2_pmh').select2({
        theme:'bootstrap4'
      }).on('change',function(){
        @this.set('project_manager_head',$(this).val())
      });
    })
    </script>
    <script>
        $(function(){
          $('#select2_pm').select2({
            theme:'bootstrap4'
          }).on('change',function(){
            @this.set('project_manager',$(this).val())
          });
        })
        </script>
        <script>
            $(function(){
              $('#select2_pl').select2({
                theme:'bootstrap4'
              }).on('change',function(){
                @this.set('project_lead',$(this).val())
              });
            })
            </script>
            <script>
                $(function(){
                  $('#select2_tl').select2({
                    theme:'bootstrap4'
                  }).on('change',function(){
                    @this.set('team_lead',$(this).val())
                  });
                })
                </script>
                <script>
                    $(function(){
                      $('#select2_emp').select2({
                        theme:'bootstrap4'
                      }).on('change',function(){
                        @this.set('employee',$(this).val())
                      });
                    })
                    </script>
@endpush