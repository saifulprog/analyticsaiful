@extends('layouts.app')
@section('title') System Setup @endsection
@section('breadcrumb') General Setting / System Setup @endsection
@section('content')

<div class="col-sm-12 col-xl-12 xl-100">
  <div class="card">
    <div class="card-header pb-0">
      <h5>System Setup Information </h5>
    </div>
    <div class="card-body">
      <ul class="nav nav-tabs" id="icon-tab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="fa fa-fort-awesome"></i>Organization Setup</a></li>
        <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#icon-email" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="fa fa-envelope-o"></i>Email Setup</a></li>
        <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab" href="#icon-sms" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="fa fa-comments-o"></i>SMS Setup</a></li>
        <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab" href="#icon-api" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="fa fa-mixcloud"></i>Api Setup</a></li>
      </ul>
      <div class="tab-content" id="icon-tabContent">
        <div class="tab-pane fade active show" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
          @includeIf('backend.system-setup.partial.organization-setup')
        </div>
        <div class="tab-pane fade" id="icon-email" role="tabpanel" aria-labelledby="profile-icon-tab">
          @includeIf('backend.system-setup.partial.email-setup')
        </div>
        <div class="tab-pane fade" id="icon-sms" role="tabpanel" aria-labelledby="contact-icon-tab">
          @includeIf('backend.system-setup.partial.sms-setup')
        </div>
        <div class="tab-pane fade" id="icon-api" role="tabpanel" aria-labelledby="contact-icon-tab">
          @includeIf('backend.system-setup.partial.api-setup')
        </div>
      </div>
    </div>
  </div>
</div>

@endsection