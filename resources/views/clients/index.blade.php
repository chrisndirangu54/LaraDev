@extends('layouts.app')

@section('styles')

    <style>
        .table th { text-align: center; vertical-align: middle; }
        .table td { text-align: center; vertical-align: middle; }
    </style>

@endsection

@section('content')
    <h3 class="page-title">Clients</h3>

    <p>
        <a href="{{ route('clients.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($clients) > 0 ? 'datatable' : '' }} dt-select" width="100%">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Client status</th>
                        <th>
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (!empty($clients))
                        @foreach ($clients as $client)
                            <tr data-entry-id="{{ $client->id }}">
                                <td></td>
                                <td>{{ $client->first_name }}</td>
                                <td>{{ $client->last_name }}</td>
                                <td>{{ $client->company_name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->client_status->title or '' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('clients.show',[$client->id]) }}" class="btn btn-xs btn-primary">
                                            View
                                        </a>
                                        <a href="{{ route('clients.edit',[$client->id]) }}" class="btn btn-xs btn-info">
                                            Edit
                                        </a>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                            'route' => ['clients.destroy', $client->id])) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('clients.mass_destroy') }}';
    </script>
@endsection