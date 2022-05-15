@extends('layouts.app')
@if(isset($data['sections']))
    @foreach ($data['sections'] as $section_name => $section)
@section($section_name)
    @include($section)
@stop
@endforeach
@endif
