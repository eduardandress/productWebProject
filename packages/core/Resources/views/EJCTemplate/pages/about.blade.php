@extends('core::EJCTemplate.layouts.full-width')
@section('content')
  <div class="container">
      <h1 class="center-align">{{trans('core::main.ourCompany')}}</h1>

      <h3 class="left-align">{{trans('core::main.mission')}}</h3>
      <p style="text-align: justify; word-wrap: break-word">
        {{$companyInfo->missionStatement or '-'}}
      </p>

      <h3 class="left-align">{{trans('core::main.vision')}}</h3>
      <p style="text-align: justify; word-wrap: break-word">
        {{$companyInfo->visionStatement or '-'}}
      </p>
  </div>
@stop