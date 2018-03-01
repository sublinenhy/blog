@extends('app')

@section('content')

    <div class="container-fluid mt-4">

        <div class="card-columns text-dark ">

            @foreach($articles as $article )

                <div class="card bg-light" >

                    <div class="card-header">{{$article->title}}</div>
                    <div class="card-body ">

                        <div class=" card-text">

                            @if (strlen($article->content)>200)
                                {{str_limit($article->content,$limit=200,$end='......')}}
                            @else
                                {{$article->content}}
                            @endif

                        </div>

                        <a href="#" class="btn btn-primary mt-lg-1  ">查看全文</a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@stop
