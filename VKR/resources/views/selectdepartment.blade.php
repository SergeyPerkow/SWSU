<option>Выберите вашу кафедру</option>
@if(!empty($departments))
    @foreach($departments as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
@endif