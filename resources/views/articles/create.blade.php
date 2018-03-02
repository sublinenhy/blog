@extends('app')

@section('nav_active_4')
    active
@stop

@section('content')
    <div class="container">

        {!! Form::open(['url'=>'/articles']) !!}

            <div class="form-group row ">
                {!! Form::label('title','标题',array('class' => 'col-sm-2 col-form-label')) !!}
                <div class="col-sm-10">
                    {!! Form::text('title','请输入标题',array('class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group row ">
                {!! Form::label('content','正文',array('class' =>'col-sm-2 col-form-label')) !!}
                <div class="col-sm-10">
                    {!! Form::textarea('content','写点什么吧!',array('class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group row ">
                {!! Form::submit('submit',array('class'=>'btn btn-primary col-md-4 offset-md-8 mt-lg-3')) !!}
            </div>

        {!! Form::close() !!}

    </div>


@stop