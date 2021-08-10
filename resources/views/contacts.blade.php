@extends('layout.master')

@section('content')
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Контакты
            </h3>
            <h4>Мой github:</h4>
            <p>Тут будет дана ссылка на мой аккаунт github</p>
        </div>

        <form method="post" action="/contacts">
            @csrf
            <div class="col-md-8">
                <h4>Форма обратной связи</h4>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Введите ваш e-mail" name="email">
            </div>
            <div class="mb-3">
                <label for="inputMessage" class="form-label">Сообщение</label>
                <input type="text" class="form-control" id="inputMessage" placeholder="Введите ваще сообщение" name="message">
            </div>

            <button type="submit" class="btn btn-primary">Создать обращение</button>
        </form>
    </div>
@endsection
