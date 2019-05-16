@extends('layouts.master')

@section('content')
    <form class="" action="{{route('contactPost')}}" method="post">

      @csrf
      <div class="form-group">
        <input class="form-control" type="text" name="name" value="" placeholder="Name">
      </div>
      <div class="form-group">
        <input class="form-control" type="email" name="email" value="" placeholder="Email">
      </div>
      <div class="form-group">
        <textarea class="form-control" name="massage" rows="8" cols="80" placeholder="Message..."></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="form-control">Sent Message</button>
      </div>
    </form>
@endsection
