@extends('layouts.admin')

@section('title')
    <span>All Photo Packages</span>
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
          @foreach($photopanels as $photopanel)
            <tr>
              <td>{{ $photopanel->name }}</td>
              <td>{{ $photopanel->price }}</td>
              <td>{{ $photopanel->description }}</td>
              <td style="text-align: center;">
                <a style="margin:1px" class="btn btn-danger" href="" onclick="return confirm('Are you sure you would like to delete this photo package. This process cannot be reversed.')">Delete</a>
                <a style="margin:1px" class="btn btn-warning" href="">Edit</a>                     
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
    </div>

@endsection