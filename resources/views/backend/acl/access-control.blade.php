@extends('backend.layouts.app')
@section('title') User Information @endsection
@section('breadcrumb') General Setting / User Information @endsection
@section('content')

<div class="col-sm-12 col-xl-12 xl-100">
  <div class="card">
    <div class="card-body">
      <ul class="nav nav-tabs" id="icon-tab" role="tablist">
        @permission('user-profile-show')
        <li class="nav-item"><a class="nav-link {{ Request::segment(1) === 'admin-users' ? 'active' : null }}"  href="{{ url('admin-users') }}"><i class="fa fa-users"></i>User Profile</a></li>
        @endpermission
        @permission('role-show')
        <li class="nav-item"><a class="nav-link {{ Request::segment(1) === 'roles' ? 'active' : null }}" href="{{ url('roles') }}"><i class="fa fa-sort-alpha-asc"></i>Role</a></li>
        @endpermission
        @permission('module-show')
        <li class="nav-item"><a class="nav-link {{ Request::segment(1) === 'modules' ? 'active' : null }}" href="{{ url('modules') }}" role="tab" aria-controls="module-icon" aria-selected="false"><i class="fa fa-sitemap"></i>Module</a></li>
        @endpermission
        @permission('permission-show')
        <li class="nav-item"><a class="nav-link {{ Request::segment(1) === 'permission' ? 'active' : null }}"href="{{ url('permission') }}" role="tab" aria-controls="permission-icon" aria-selected="false"><i class="fa fa-check-square-o"></i>Permission</a></li>
        @endpermission
      </ul>

      <div class="tab-content" id="icon-tabContent">
        
        <div class="tab-pane fade active show" id="user-icon" role="tabpanel" aria-labelledby="user-tab">
          @if(!empty($qUsers) && Request::segment(1) === 'admin-users')
              @includeIf('backend.acl.user.all-user')
          @elseif(!empty($qRoles) && Request::segment(1) === 'roles')    
              @includeIf('backend.acl.role.all-roles')
          @elseif(!empty($qModules) && Request::segment(1) === 'modules')    
              @includeIf('backend.acl.module.all-modules')
          @elseif(!empty($qPermissions) && Request::segment(1) === 'permission')    
              @includeIf('backend.acl.permission.all-permissions')
          @endif    
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
