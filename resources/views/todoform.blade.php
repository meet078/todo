@extends('layout')
@section('alert')
    @error("title")
        <x-alert :message="$message"/>
    @enderror
    @error("description")
        <x-alert :message="$message"/>
    @enderror
    @error("complete")
        <x-alert :message="$message"/>
    @enderror
@stop
@section("body")
<form action="/add" method="POST" class="row g-3">
    @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" value="{{$title ?? ""}}" name="title">
    </div>
    <div class="col-md-6">
      <label for="date" class="form-label">Date</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="complete">
    </div>
    <div class="col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" placeholder="Description" rows="5" value="{{$description ?? ""}}" name="description"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@stop