@extends('layouts.dive')

@section('title')
    <span>All Dive Packages</span>
@endsection

@section('content')
    
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Package Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($dives as $dive)
            <tr>
              <td>{{ $dive->name }}</td>
              <td>{{ $dive->price }}</td>
              <td>{{ $dive->description }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="" onclick="return confirm('Are you sure you would like to delete this blog post. This process cannot be reversed.')">Delete</a>
                <a style="margin:1px" class="btn btn-warning" href="">Edit</a>                     
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>

@endsection