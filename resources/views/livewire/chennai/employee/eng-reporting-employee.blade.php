<div class="col-sm-3">
    <label id="lable">Reporting To</label>
    <select name="" class="form_input" wire:model="employee_report_to" id="">
        <option value="">Select Reporting Head</option>
        @foreach($reporting_heads as $head)
        <option value="{{$head->id}}">{{$head->name}}</option>

        @endforeach
    </select>
    @error('employee_report_to')
    <span class='error text-danger'>{{ $message }}</span>
    @enderror
</div>