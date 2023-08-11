@extends("layout")
@section('title', "| Home")
@section("alert")
@error('email')
    <x-alert :message="$message"/>
@enderror
@error('password')
    <x-alert :message="$message"/>
@enderror
@error('validation')
    <x-alert :message="$message"/>
@enderror
@error('auth')
    <x-alert :message="$message"/>
@enderror
@stop
@section('body')

@stop