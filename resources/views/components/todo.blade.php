<div class="card my-3" >
  <div class="card-header">
    #{{$title ?? ''}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$description ?? ''}}</p>
    <h6 class="card-text">⏰ {{$date ?? ''}}</h6>
    <div class="d-flex mt-4">
      @if (!$done)
      <a href="/done/{{$id ?? ''}}" class="btn btn-primary">Mark as Done</a>
      @endif
        <a href="/delete/{{$id ?? ''}}" class="btn btn-danger ms-auto">Delete</a>
    </div>
  </div>
</div>