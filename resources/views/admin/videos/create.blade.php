@extends('admin/adminLayout')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        {!! Form::open(array('url' => 'admin/videos','files'=>true,)) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('youtubeLink', 'Youtube Link:') !!}
        {!! Form::url('youtubeLink', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Videoscreenshot', 'Video Screenshot:') !!}
        {!! Form::file('image') !!}
    </div>
            <div class="form-group">
                {!! Form::label('tags','Tags:') !!}
                {!! Form::select('tags',$tags,null,['class'=>'form-control','multiple']) !!}
            </div>
        <div class="form-group">
            {!! Form::label('description','Description:') !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>


    <div class="form-group">
        {!! Form::submit('Upload Video', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>


@endsection