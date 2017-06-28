@extends('layout')

@section('content')
  <form method="POST" action="/task-store">
    {{ csrf_field() }}
    <label>New task</label>
    <textarea name="text" class="form-control"></textarea>

    <button type="submit" class="btn btn-success">Save</button>
  </form>
@endsection
