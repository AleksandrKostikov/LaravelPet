@extends('layout.master')

@section('title')
    {{ "Изменение задачи" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Изменение задачи
        </h3>

        @include('layout.errors')

        <form method="post" action="/tasks/{{ $task->id }}">

            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название задачи</label>
                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Введите название задачи" value="{{ old('title', $task->title) }}">
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Описание задачи</label>
                <textarea name="body" class="form-control" id="inputBody">{{ old('body', $task->body) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

        <form method="post" action="/tasks/{{ $task->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
@endsection
