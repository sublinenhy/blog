@extends('app')

@section('content')

    <div class="card-columns text-dark ">
        @foreach($articles as $article )
            <div class="card bg-light">
                <div class="card-header">{{$article->title}}</div>

                <div class="card-body">
                    {{$article->content}}
                    <a href="#" class="btn btn-primary ">Go somewhere</a>
                </div>
            </div>

        @endforeach
    </div>
@stop