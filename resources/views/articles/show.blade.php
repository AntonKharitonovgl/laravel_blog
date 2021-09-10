@extends('layout.master')

@section('content')

    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                {{$article->title}}
            </h3>

            <div>
                @foreach($article->tags as $tag)
                    <a  href="#" class="bg-secondary text-white text-decoration-none">{{$tag->name}}</a>
                @endforeach
            </div>

            <p>
                {{$article->body}}
            </p>


            <a href="/articles/{{ $article->symbol_code }}/edit"> Редактировать </a>
            <hr>
            <a href="/"> Вернуться к статьям </a>
        </div>
    </div>

@endsection

