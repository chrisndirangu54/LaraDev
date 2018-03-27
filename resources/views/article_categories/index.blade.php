@extends('layouts.app')

@section('styles')

    <style>
        .table th { text-align: center; vertical-align: middle; }
        .table td { text-align: center; vertical-align: middle; }
    </style>

@endsection

@section('content')
    <h3 class="page-title">Article Categories</h3>

    <p>
        <a href="{{ route('article-categories.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($categories) > 0 ? 'datatable' : '' }} dt-select" width="100%">
                <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </th>
                </tr>
                </thead>

                <tbody>
                @if (!empty($categories))
                    @foreach ($categories as $category)
                        <tr data-entry-id="{{ $category->id }}">
                            <td style="width: 10px"></td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td style="width: 100px">
                                <a href="{{ route('article-categories.edit', $category->id) }}" class="btn btn-xs btn-info">
                                    Edit
                                </a>
                                {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                    'route' => ['article-categories.destroy', $category->id])) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('article-categories.mass_destroy') }}';
    </script>
@endsection