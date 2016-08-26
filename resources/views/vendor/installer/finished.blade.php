@extends('vendor.installer.layouts.master')

@section('title', trans('messages.final.title'))
@section('container')
    <p class="paragraph">{{ session('message')['message'] }}</p>
    <div class="buttons">
        <a href="{{ route('CoreRoutes::landing_page') }}" class="button">{{ trans('messages.final.initApp') }}</a>
    </div>
@stop