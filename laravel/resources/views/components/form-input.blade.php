<label for="{{ $name }}">{{ $label }}</label>
<input id="{{ $name }}" name="{{ $name }}" value="{{ $useOld ? old($name) : $value }}" type="{{ $type }}" >
@error($name)
    <div class="err" id="{{ $name }}">{{ $message }}</div>
@enderror