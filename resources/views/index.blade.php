@extends('common/app')
@section('title')
    我的首页 - 知康
@stop
@section('content')
    @if (Auth::getUser()->hasRole('admin'))
        Hello World.
    @endif
@stop