@extends('app')

@section('nav_active_2')
    active
@stop

@section('content')

    <div class="container-fluid mt-lg-5">

        <div class="row">

            <h1 class="col align-self-center text-center">{{$article->title}}</h1>

        </div>

        <div class="row">

            <article class="col-md-6 offset-md-3">{{$article->content}}</article>

        </div>

    </div>



@stop