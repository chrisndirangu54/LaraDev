@extends('layouts.app')

@section('content')
    <h3 class="page-title">Articles</h3>

    <p>
        <a href="" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped dt-select">
                <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                {{--@if (count($notes) > 0)
                    @foreach ($notes as $note)
                        <tr data-entry-id="{{ $note->id }}">
                            <td></td>
                            <td>{{ $note->project->title or '' }}</td>
                            <td>{!! $note->text !!}</td>
                            <td>{!! $note->text !!}</td>
                            <td>{!! $note->text !!}</td>
                            <td><a href="{{ route('notes.edit',[$note->id]) }}" class="btn btn-xs btn-info">Edit</a>{!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['notes.destroy', $note->id])) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No entries in table</td>
                    </tr>
                @endif--}}
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        {{--window.route_mass_crud_entries_destroy = '{{ route('notes.mass_destroy') }}';--}}
    </script>
@endsection