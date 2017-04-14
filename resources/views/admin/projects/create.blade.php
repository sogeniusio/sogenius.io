@extends('admin2') @section('title', '| Create New Project')
@section('stylesheets')
  {!! Html::style('/css/parsley.css') !!}
  {!! Html::style('/css/select2.min.css') !!}
<!-- TINYMCE WYSIWYG EDITOR -->
<script type="text/javascript" src="{{ asset('/packages/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
        selector: '.tiny-textarea',
        height: 500,
        theme: 'modern',
        plugins: ['advlist autolink lists link image charmap print preview hr anchor pagebreak', 'searchreplace wordcount visualblocks visualchars code fullscreen', 'insertdatetime media nonbreaking save table contextmenu directionality', 'emoticons template paste textcolor colorpicker textpattern imagetools codesample'],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true,
        extended_valid_elements : "span[!class]",
        templates: [{title: 'Test template 1', content: 'Test 1'}, {title: 'Test template 2', content: 'Test 2'}],
        content_css: ['//fonts.googleapis.com/css?family=Lato:300,300i,400,400i', '//www.tinymce.com/css/codepen.min.css'],
        valid_elements : "@[id|class|style|title|dir<ltr?rtl|lang|xml::lang|onclick|ondblclick|"
                        + "onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onkeypress|"
                        + "onkeydown|onkeyup],a[rel|rev|charset|hreflang|tabindex|accesskey|type|"
                        + "name|href|target|title|class|onfocus|onblur],strong/b,em/i,strike,u,"
                        + "#p,-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|"
                        + "src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup,"
                        + "-blockquote,-table[border=0|cellspacing|cellpadding|width|frame|rules|"
                        + "height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|"
                        + "height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,"
                        + "#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor"
                        + "|scope],#th[colspan|rowspan|width|height|align|valign|scope],caption,-div,"
                        + "-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face"
                        + "|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite],"
                        + "object[classid|width|height|codebase|*],param[name|value|_value],embed[type|width"
                        + "|height|src|*],script[src|type],map[name],area[shape|coords|href|alt|target],bdo,"
                        + "button,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|"
                        + "valign|width],dfn,fieldset,form[action|accept|accept-charset|enctype|method],"
                        + "input[accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value],"
                        + "kbd,label[for],legend,noscript,optgroup[label|disabled],option[disabled|label|selected|value],"
                        + "q[cite],samp,select[disabled|multiple|name|size],small,"
                        + "textarea[cols|rows|disabled|name|readonly],tt,var,big,iframe[src|title|width|height|allowfullscreen|frameborder"
    });
    $('textarea').keyup(updateCount);
    $('textarea').keydown(updateCount);
    function updateCount() {
        var cs = $(this).val().length;
        $('#characters').text(cs);
    }
    </script>
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
            <h1 class="page-header">Create New Project</h1>
        </div>
        <div class="col-lg-2 ">
            <a href="{{ route('projects.index') }}" class="back-button btn btn-block btn-primary">View all projects</a>
        </div>
    </div>
    <div class="row">

      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="container">
              <h3 class="panel-title">Lets create a new post.</h3>

            </div>
                      </div>
            <div class="panel-body">
              <div class="form-content">
                <div class="col-md-12">

                    {{  Form::open(['id' => 'project-form', 'data-parsley-validate' => '', 'name' => 'project-form', 'route' => 'projects.store', 'files' => true ]) }}
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                {{ Form::label('title', "Title:") }}
                                {{ Form::text('title', null, array('class' => 'title form-control', 'required' => '', 'maxlength' => '255')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('slug', "Slug:") }}

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">{{ url('/works/') }}/</span>
                                    {{ Form::text('slug', null, array('id' => 'basic-url', 'class' => 'slug form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                {{ Form::label('type_id', "Type:") }}

                                <select class="form-control" name="type_id">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {{ Form::label('identities', "Identities:") }}

                                <select class="form-control select2-multi" name="identities[]" multiple="multiple">
                                    @foreach ($identities as $identity)
                                        <option value="{{ $identity->id }}">{{ $identity->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                      </div>
                      <div class="form-group">
                          {{ Form::label('overview', "Overview:") }}
                          {{ Form::textarea('overview', null, array('id' => 'project_overview', 'class' => 'form-control')) }}
                      </div>


                    <div class="row">
                      <div class="col-lg-4">
                        <div class="page-header">
                          <h4>Display Image:</h4>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-12">
                              {{ Form::file('display_image') }}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="page-header">
                          <h4>Featured Images: <small>Suggested dimensions are <strong>700px x 400px</strong>.</small></h4>
                        </div>
                        <div class="form-group">
                            {{-- {{ Form::label('feat_image', "Featured Image:") }} --}}
                            <div class="row">
                              <div class="col-lg-4">
                                <strong>Featured #1</strong>{{ Form::file('feat_image1') }}
                              </div>
                              <div class="col-lg-4">
                                <strong>Featured #2</strong>{{ Form::file('feat_image2') }}
                              </div>
                              <div class="col-lg-4">
                                <strong>Featured #3</strong>{{ Form::file('feat_image3') }}
                              </div>
                            </div>
                        </div>

                      </div>

                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="page-header">
                          <h4>Body: <small>Constraint description goes here <strong>≈≈≈≈≈≈≈≈≈≈≈≈</strong>.</small></h4>
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', "Description:") }}
                            {{ Form::textarea('description', null, array('id' => 'project_description', 'class' => 'tiny-textarea form-control')) }}
                        </div>

                      </div>
                    </div>


                    <div class="form-group">
                        {{ Form::submit('Create Project', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>

                    {{  Form::close() }}

                </div>

                </div>
            </div>
          </div>
        </div>



            </div>


    </div>


@endsection

@section('scripts')

    {!! Html::script('/js/libs/parsley.min.js') !!}
    {!! Html::script('/js/libs/select2.min.js') !!}

    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>

@endsection
