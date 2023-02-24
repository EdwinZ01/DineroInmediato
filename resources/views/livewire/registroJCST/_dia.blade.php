<select class="form-select" name="dia" wire:model.defer="dia" required>
    <option selected>Día</option>
    @for ($a=1;$a<=30;$a++)
        <option value="{{$a}}">{{$a}}</option>
    @endfor
</select>
@if($errors->has('dia'))
<span style="color:brown;">{{ $errors->first('dia') }}</span>
@endif