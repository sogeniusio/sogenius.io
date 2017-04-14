@extends('admin2')

@section('title', '| Projects')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('/css/select2.min.css') !!}

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
        .back-button {
          margin: 40px 0 20px;
        }
    </style>

@endsection

@section('content')


    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">All Projects</h1>
        </div>
        <div class="col-lg-2 ">
            <a href="{{ route('projects.create') }}" class="back-button btn btn-block btn-primary">New Project</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                              <h3 class="panel-title">All published posts</h3>
                          </div>
                          <div class="panel-body">
                              <table class="table table-striped table-responsive">
                                  <thead>
                                  {{--                         <th>#</th>
                                  --}}
                                  <th>Title</th>
                                  <th>Type</th>
                                  <th class="hidden-sm hidden-xs">Identity</th>
                                                              <th>Description</th>

                                  <th>Created</th>
                                  <th></th>
                                  </thead>

                                  <tbody>

                                  @foreach ($projects as $project)
                                      <tr>
                                          {{--                                 <td>{{ $project->id }}</td>
                                          --}}
                                          <td><a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a></td>
                                          <td><small>{{ $project->type->name }}</small></td>
                                          <td class="hidden-sm hidden-xs">
                                              @foreach ($project->identities as $identity)
                                                  <a href="{{ route('identities.show', $identity->id) }}"><span class="label label-default">{{ $identity->name }}</span></a>
                                              @endforeach
                                          </td>
                                          <td>{{ substr(strip_tags($project->description), 0, 50) }}{{ strlen(strip_tags($project->description))  > 50 ? "..." : "" }}</td>
                                          <td>{{ date('m/d/y', strtotime($project->created_at)) }}</td>
                                          <td>
                                              <div class="btn-group">
                                                  {!! Html::linkRoute('projects.show', 'View', array( $project->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                                                  {!! Html::linkRoute('projects.edit', 'Edit', array( $project->id ), array('class' => 'btn btn-link  btn-xs col-xs-12 col-sm-4')) !!}
                                                  {!! Html::linkRoute('projects.destroy', 'Delete', array( $project->id ), array('class' => 'btn btn-link btn-xs col-xs-12 col-sm-4', 'type' => 'button')) !!}

                                              </div>
                                          </td>
                                      </tr>
                                  @endforeach

                                  </tbody>
                              </table>

                              <div class="text-center">
                                  {!! $projects->links() !!}
                              </div>
                          </div>
                </div>


        </div>
    </div>
@endsection
