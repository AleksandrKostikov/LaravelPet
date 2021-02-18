@extends('layout.master')

@section('title')
    {{ "Контакты" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Оставить отзыв
        </h3>

        @include('layout.errors')

        <form method="post" action="/contacts">

            @csrf

            <div class="mb-3">
                <label for="inputEmail" class="form-label">EMAIL</label>
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Введите ваш email">
            </div>
            <div class="mb-3">
                <label for="inputMessage" class="form-label">Сообщение</label>
                <input type="text" name="message" class="form-control" id="inputMessage" placeholder="Введите ваше сообщение">
            </div>
            <button type="submit" class="btn btn-primary">Отправить отзыв</button>
        </form>
    </div>
@endsection

