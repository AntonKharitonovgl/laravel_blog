@extends('layout.master')

@section('content')
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Редактирование статьи
            </h3>
        </div>
    </div>

    @include('layout.errors')
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PATCH')
        @include('layout.form')
        <button type="submit" class="btn btn-primary">Редактировать статью</button>
    </form>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Удалить статью</button>
    </form>
@endsection
