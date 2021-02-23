@extends('layout.master')

@section('title')
    {{ "Создание задачи" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Отправить уведомление
        </h3>

        @include('layout.errors')

        <form method="post" action="/service">

            @csrf

            <div class="mb-3">
                <label for="inputTitle" class="form-label">Заголовок уведомления</label>
                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Введите заголовок" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="inputText" class="form-label">Текст уведомления</label>
                <textarea name="text" class="form-control" id="inputText">{{ old('text') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
