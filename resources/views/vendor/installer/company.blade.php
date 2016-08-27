@extends('vendor.installer.layouts.master')

@section('title', trans('messages.company.title'))
@section('container')
    <p class="paragraph">{{ trans('messages.company.message') }}</p>
    <form action="{{ route('LaravelInstaller::companySave')}}" enctype="multipart/form-data" method="POST">

            <div class="input-field"> 
                <div class="form-group">
                    <span class="help-block"></span>
                    <input type="text" class="form-control" id="name" name="name" >
                    <label class="control-label" for="name">{{ trans('messages.company.name') }}</label>
                </div>
            </div>
            <div class="input-field "> 
                <div class="form-group">
                    <div class="input-field">
                        <textarea id="description" class="materialize-textarea" name="description" style="max-height: 200px; resize: none" maxlength="450"></textarea>
                        <label for="description">{{ trans('messages.company.description') }}</label>
                    </div>
                </div>
            </div>
            <div class="input-field "> 
                <div class="form-group">
                    <div class="input-field">
                        <textarea id="missionStatement" class="materialize-textarea" name="missionStatement" style="max-height: 200px; resize: none" ></textarea>
                        <label for="missionStatement">{{ trans('messages.company.missionStatement') }}</label>
                    </div>
                </div>
            </div>
            <div class="input-field "> 
                <div class="form-group">
                    <div class="input-field">
                        <textarea id="visionStatement" class="materialize-textarea" name="visionStatement" style="max-height: 200px; resize: none"></textarea>
                        <label for="visionStatement">{{ trans('messages.company.visionStatement') }}</label>
                    </div>
                </div>
            </div>
            <div class="input-field "> 

                <label for="input-file-now">Logo</label>
                <div class="form-group">
                    <input type="file" name="logo" id="input-file-now" data-allowed-file-extensions="jpg png" accept=".jpg,.png" class="dropify form-control" />
                </div>
            </div>
                    <br />

            <div class="row">
                <div class="input-field col m6 s12"> 
                    <!-- <div class="form-group"> -->
                        <i class="fa fa-phone prefix"></i>
                        <input type="text" class="form-control" name="mainLandPhone" id="mainLandPhone" >
                        <label class="control-label" for="mainLandPhone">{{ trans('messages.company.mainLandPhone') }}</label>
                    <!-- </div> -->
                </div>
                <div class="input-field col m6 s12"> 
                    <div class="form-group">
                        <i class="fa fa-envelope prefix"></i>
                        <span class="help-block"></span>
                        <input type="text" class="form-control" name="mainEmail" id="mainEmail" >
                        <label class="control-label" for="mainEmail">{{ trans('messages.company.mainEmail') }}</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m6 s12"> 
                    <div class="form-group">
                        <i class="fa fa-facebook prefix"></i>
                        <span class="help-block"></span>
                        <input type="text" class="form-control" name="mainFacebookProfile" id="mainFacebookProfile" >
                        <label class="control-label" for="mainFacebookProfile">{{ trans('messages.company.mainFacebookProfile') }}</label>
                    </div>
                </div>
                <div class="input-field col m6 s12"> 
                    <div class="form-group">
                        <i class="fa fa-twitter prefix"></i>
                        <span class="help-block"></span>
                        <input type="text" class="form-control" name="mainTwitterProfile" id="mainTwitterProfile" >
                        <label class="control-label" for="mainTwitterProfile">{{ trans('messages.company.mainTwitterProfile') }}</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col m6 s12"> 
                    <div class="form-group">
                        <i class="fa fa-instagram prefix"></i>
                        <span class="help-block"></span>
                        <input type="text" class="form-control" name="mainInstagramProfile" id="mainInstagramProfile" >
                        <label class="control-label" for="mainInstagramProfile">{{ trans('messages.company.mainInstagramProfile') }}</label>
                    </div>
                </div>
                <div class="input-field col m6 s12"> 
                    <div class="form-group">
                        <i class="fa fa-google-plus-official prefix"></i>
                        <span class="help-block"></span>
                        <input type="text" class="form-control" name="mainGooglePlusProfile" id="mainGooglePlusProfile" >
                        <label class="control-label" for="mainGooglePlusProfile">{{ trans('messages.company.mainGooglePlusProfile') }}</label>
                    </div>
                </div>
            </div>
            
            <div class="buttons">
                <button class="button" type="submit">
                {{trans('messages.next') }}</button>
            </div>
     </form>

    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': '<p class="center-align">{{trans("messages.company.dropLogoMessage")}}</p>',
                'replace': '{{trans("messages.company.replaceLogoMessage")}}',
                'remove':  '{{trans("messages.company.removeLogoMessage")}}',
                'error':   '{{trans("messages.company.errorUploadLogo")}}'
            }
        });
    </script>
@stop