@extends('layout.master')

@section('content')
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Список обращений
            </h3>
            <table class="table">
                @foreach($feedbacks as $feedback)
                    @include('admin.itemFeedback')
                @endforeach
            </table>
        </div>
    </div>
@endsection
