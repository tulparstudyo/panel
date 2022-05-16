@php
    if(!empty($value)) $class .= " is-filled";
    if(empty($type)) $type = "text";
    if($type=='checkbox') $class .=' form-check form-switch'
@endphp
<div class="input-group input-group-outline my-3 {{ $class }}">
    @if($type=='text')
        <label class="form-label">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ $value }}" onfocus="focused(this)" onfocusout="defocused(this)">
    @elseif($type=='checkbox')
        <input class="form-check-input" type="checkbox" id="rememberMe">
        <label class="form-check-label mb-0 ms-2" for="rememberMe">{{ $label }}</label>
    @elseif($type=='textarea')
        <label class="form-label">{{ $label }}</label>
        <textarea name="{{ $name }}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">{{ $value }}"</textarea>
    @else
        <label class="form-label">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ $value }}" onfocus="focused(this)" onfocusout="defocused(this)">
    @endif
</div>
