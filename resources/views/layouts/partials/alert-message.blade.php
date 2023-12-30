@foreach (['danger', 'warning', 'success', 'info','primary'] as $msg)
  @if(Session::has('alert-' . $msg))
  <div class="flash-message">
    <div class="alert alert-{{ $msg }} inverse alert-dismissible fade show" role="alert"><i class="icon-bell"></i>
      <b>{{ Session::get('alert-' . $msg) }} </b>
      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
  </div>
  @endif
@endforeach