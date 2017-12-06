@extends('layouts.admin')

@section('title')
    <span>Top Picks</span>
@endsection

@section('content')
    
    <div class="container">
        <table id="top_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Title</th>
                <th>Top accommodation</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($accommodations as $accommodation)
                    <tr>
                        <td>{{ $accommodation->title }}</td>
                        <td>@if($accommodation->top_acco == '1') 
                                Yes 
                            @else 
                                No 
                            @endif
                        </td>
                        <td> <a href="{{ url('/accommodation').'/'.$accommodation->type.'/'.$accommodation->slug }}">{{ url('/accommodation').'/'.$accommodation->type.'/'.$accommodation->slug }}</a></td>
                        <td>
                            @if($accommodation->top_acco == '1')
                                <a href="{{ url()->current() }}/{{ $accommodation->id }}/top/0" class="btn btn-danger">Remove from Top accommodation</a>
                            @else 
                                <a href="{{ url()->current() }}/{{ $accommodation->id }}/top/1" class="btn btn-success">Top accommodation</a>
                            @endif 
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
        $('#top_table').DataTable();
    });
</script>

@endsection