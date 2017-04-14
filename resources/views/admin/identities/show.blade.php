@extends('admin2')

@section('title', "| $identities->name Project Identity")

@section('stylesheets')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{ $identities->name }} --identities
                <small>{{$identities->projects()->count() }} @if ($identities->projects()->count()) identities
                  </small>
                <div class="pull-right">
                    {!! Html::linkRoute('identities.edit', 'Edit Identity', array( $identities->id ), array('class' => 'btn btn-primary')) !!}

                </div>
            </h1>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Associated projects
                    <div class="pull-right">
                        <a href="{{ route('identities.index') }}" class="btn btn-default btn-xs"><span><i
                                        class="fa fa-angle-left"></i></span> Back to identities list</a>

                        <div class="btn-group">
                            {{ Form::open(['route' => ['identities.destroy', $identities->id], 'method' => 'DELETE']) }}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table ">
                        <caption>Viewing all projects that are identified <span
                                    class="label label-default">{{ $identities->name }}</span>.
                        </caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Title</th>
                            <th>Associated identities</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($identities->projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>
                                    @foreach ($project->identities as $identities)
                                        <a href="{{ route('identities.show', $identities->id) }}"><span
                                                    class="label label-default">{{ $identities->name }}</span></a>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('projects.show', $project->id) }}"
                                       class="btn btn-xs btn-default outline">View</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('/js/parsley.min.js') !!}
    {!! Html::script('/js/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>

@endsection
