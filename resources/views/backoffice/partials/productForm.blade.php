<h3 class="page-title">Articles</h3>
{!! Form::open(['method' => 'POST', 'route' => ['admin.articles.store']]) !!}

<div class="panel panel-default">
    <div class="panel-heading">
        Create
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if ($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('article_text', 'Article Text', ['class' => 'control-label']) !!}
                {!! Form::textarea('article_text', old('article_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                <p class="help-block"></p>
                @if ($errors->has('article_text'))
                    <p class="help-block">
                        {{ $errors->first('article_text') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('tag', 'Tags', ['class' => 'control-label']) !!}
                <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
                    Select all
                </button>
                <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
                    Deselect all
                </button>
                {!! Form::select('tag[]', $tags, old('tag'), [
                    'class' => 'form-control select2',
                    'multiple' => 'multiple',
                    'id' => 'selectall-tag',
                ]) !!}
                <p class="help-block"></p>
                @if ($errors->has('tag'))
                    <p class="help-block">
                        {{ $errors->first('tag') }}
                    </p>
                @endif
            </div>
        </div>

    </div>
</div>

{!! Form::submit('Save article', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop

@section('styles')
@parent

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@stop

@section('javascript')
@parent

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $("#selectbtn-tag").click(function() {
        $("#selectall-tag > option").prop("selected", "selected");
        $("#selectall-tag").trigger("change");
    });
    $("#deselectbtn-tag").click(function() {
        $("#selectall-tag > option").prop("selected", "");
        $("#selectall-tag").trigger("change");
    });

    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@stop
