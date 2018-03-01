@extends('app')

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center">{{$article->title}}</div>

        </div>

        <div class="row">

            <article class="col-md-8 text-center">{{$article->content}}</article>

        </div>

    </div>

    <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
    </div>

@stop