@php
    if(!empty($value)) $class .= " is-filled";
    if(empty($type)) $type = "text";
@endphp
<div class="input-group input-group-outline my-3 {{ $class }}">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ $value }}" onfocus="focused(this)" onfocusout="defocused(this)">
</div>
