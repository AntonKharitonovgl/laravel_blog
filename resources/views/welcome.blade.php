@extends('layout.master')
@section('content')

    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Список статей
                </h3>

                @foreach($articles as $article)
                    @include('articles.item')
                @endforeach

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>

            </div>

            @include('layout.sidebar');
        </div>
    </main>
@endsection

