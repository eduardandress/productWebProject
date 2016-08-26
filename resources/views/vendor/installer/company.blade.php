@extends('vendor.installer.layouts.master')

@section('title', trans('messages.company.title'))
@section('container')
    <p class="paragraph">{{ trans('messages.company.message') }}</p>
    <form action="{{ route('LaravelInstaller::companySave') }}" method="POST">
        <!-- <div class="input-field">  -->
            <div class="form-group">
                <label class="control-label" for="">Name</label>
                <span class="help-block"></span>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
        <!-- </div> -->
        <!-- <div class="input-field">  -->
            <div class="form-group">
                <label class="control-label" for="">Description</label>
                <span class="help-block"></span>
                <input type="text" class="form-control" name="description" id="description" placeholder="">
            </div>
        <!-- </div> -->
        <!-- <div class="input-field">  -->
            <div class="form-group">
                <label class="control-label" for="">Main Phone</label>
                <span class="help-block"></span>
                <input type="text" class="form-control" name="mainLandPhone" id="mainLandPhone" placeholder="">
            </div>
        <!-- </div> -->
        <!-- <div class="input-field">  -->
            <div class="form-group">
                <label class="control-label" for="">Main Email</label>
                <span class="help-block"></span>
                <input type="text" class="form-control" name="mainEmail" id="mainEmail" placeholder="">
            </div>
        <!-- </div> -->
        
   

    <div class="buttons">
        <button class="button" type="submit">
        {{trans('messages.next') }}</button>
    </div>
     </form>

@stop