@extends('layouts.admin')

@section('title')
    <span>Inquiry Detail of  {{ $inquiry->user->name }} as  {{ $inquiry->name }} to {{ $inquiry->room->accommodation->title }} - {{ $inquiry->room->room_type }} </span>
@endsection

@section('content')
    
    <div class="container">
      <h3><span style="font-weight:bold;">User Name:</span><br>  {{ $inquiry->name }}</h3>
      <h3><span style="font-weight:bold;">Email:</span><br>  {{ $inquiry->email }}</h3>
      <h3><span style="font-weight:bold;">Contact Number:</span><br>  {{ $inquiry->contact }}</h3>
      <h3><span style="font-weight:bold;">Accomodation Inquiried:</span><br>  {{ $inquiry->room->accommodation->title }} - {{ $inquiry->room->room_type }}</h3>
      <h3><span style="font-weight:bold;">Accomodation link:</span><br>  localescapemaldives.com/accommodation/(('accommodation_type'))/(('accommodation->slug'))</h3>
      <h3><span style="font-weight:bold;">Inquiry Detail:</span><br> {{ $inquiry->details }}</h3>
    </div>

@endsection

