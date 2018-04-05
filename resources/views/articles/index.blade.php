@extends('layouts.app')

@section('styles')

    <style>
        .table th { text-align: center; vertical-align: middle; }
        .table td { text-align: center; vertical-align: middle; }
    </style>

@endsection

@section('content')
    <h3 class="page-title">Articles</h3>

    <p>
        <a href="{{ route('articles.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            Articles
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($articles) > 0 ? 'datatable' : '' }} dt-select" width="100%">
                <thead>
                <tr>
                    <th style="text-align:center;">
                        <input type="checkbox" id="select-all">
                    </th>
                    <th>Article</th>
                    <th>Article Category</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </th>
                </tr>
                </thead>

                <tbody>
                @if (count($articles) > 0)
                    @foreach ($articles as $article)
                        <tr data-entry-id="{{ $article->id }}">
                            <td style="width: 10px"></td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->articleCategory->name }}</td>
                            <td>{{ $article->url }}</td>
                            <td title="{{ $article->description }}">
                                {{ $article->description }}
                            </td>
                            <td style="width: 100px">
                                <a href="{{ route('articles.edit',[$article->id]) }}" class="btn btn-xs btn-info">
                                    Edit
                                </a>
                                {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                    'route' => ['articles.destroy', $article->id])) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="12">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('articles.mass_destroy') }}';
    </script>
@endsection