@extends('layouts.admin')

@section('title')
    <span style="font-size:14px;">Inquiry Detail of  {{ $inquiry->user->name }} as  {{ $inquiry->name }} to {{ $inquiry->room->accommodation->title }} - {{ $inquiry->room->room_type }} </span>
@endsection

@section('content')
    
    <div class="container">
      <h4><span style="font-weight:bold;">Name:</span><br>  {{ $inquiry->name }}</h4>
      <h4><span style="font-weight:bold;">Email:</span><br>  {{ $inquiry->email }}</h4>
      <h4><span style="font-weight:bold;">Contact Number:</span><br>  {{ $inquiry->contact }}</h4>
      <h4><span style="font-weight:bold;">Accomodation Inquiried:</span><br>  {{ $inquiry->room->accommodation->title }} - {{ $inquiry->room->room_type }}</h4>
      <h4><span style="font-weight:bold;">Accomodation link:</span><br>  localescapemaldives.com/accommodation/(('accommodation_type'))/(('accommodation->slug'))</h4>
      <h4><span style="font-weight:bold;">Inquiry Detail:</span><br> {{ $inquiry->details }}</h4>
    </div>

@endsection

