@extends('layout.master')

@section('content')
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Создание статьи
            </h3>
        </div>
    </div>

    @include('layout.errors')

    <form method="post" action="/articles">
        @csrf
        @include('layout.form', compact('article'))
        <button type="submit" class="btn btn-primary">Создать статью</button>
    </form>
@endsection
