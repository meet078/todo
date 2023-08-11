@extends("layout")
@section("body")

@forelse ($data as $item)
<x-todo :id="$item->id" :title="$item->title" :description="$item->description" :date="$item->complete" :done="$item->done"/>
@empty
<div id="liveToast" class="toast position-absolute bg-danger" style="bottom: 5%; right: 5%;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Notifactions</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-light">
        No todo
    </div>
  </div>
  <script>

const toastLiveExample = document.getElementById('liveToast')
  window.addEventListener('load', () => {
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
  </script>
@endforelse
@stop
