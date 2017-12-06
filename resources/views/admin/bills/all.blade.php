@extends('layouts.admin')

@section('title')
    <span>Top Picks</span> 
    @if(app('request')->input('create') == 'athikonly')
        <a class="btn btn-success" href="{{ url()->current() }}/create?create=athikonly">Create Bill</a>     
    @endif
@endsection

@section('content')
    
    <div class="container">
        <table id="top_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Bill Description</th>
                <th>Due Date</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
                @foreach($bills as $bill)
                    <tr>
                        <td>{{ $bill->description }}</td>
                        <td>{{ $bill->due_date }}</td>
                        <td>{{ $bill->price }}</td>
                        <td>
                            @if($bill->paid == '1')
                                <span class="label label-success">Paid</span>
                            @else
                                <span class="label label-danger">Unpaid</span>
                            @endif
                        </td>
                        <td> <a class="btn btn-success" href="{{ Helper::s3_url_gen($bill->pdf_link) }}" target="_blank">View Bill</a></td>
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