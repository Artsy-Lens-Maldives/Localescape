@extends('layouts.admin')

@section('title')
    <span>All Tour Packages</span>
@endsection

@section('content')
    
    <div class="container">
      <table id="tours" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Package Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Itenarary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tours as $tour)
            <tr>
              <td>{{ $tour->name }}</td>
              <td>{{ $tour->price }}</td>
              <td>{{ $tour->description }}</td>
              <td>{{ $tour->itenarary }}</td>
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

@section('js')
    
<script>
    $(document).ready(function() {
        $('#tours').DataTable();
    } );
</script>

@endsection