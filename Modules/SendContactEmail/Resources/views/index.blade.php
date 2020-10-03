@extends('sendcontactemail::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('sendcontactemail.name') !!}
    </p>
@stop
