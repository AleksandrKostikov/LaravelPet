@extends('layout.master')

@section('title')
    {{ "Создать статью" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Создание статьи
        </h3>

        @include('layout.errors')

        <form method="post" action="/">

            @csrf

            <div class="mb-3">
                <label for="inputSlug" class="form-label">Символьный код</label>
                <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="Введите символьный код статьи">
            </div>
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Название статьи</label>
                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Введите название статьи">
            </div>
            <div class="mb-3">
                <label for="inputPreviewText" class="form-label">Краткое описание</label>
                <input type="text" name="preview_text" class="form-control" id="inputPreviewText" placeholder="Введите краткое описание статьи">
            </div>
            <div class="mb-3">
                <label for="inputText" class="form-label">Детальное описание</label>
                <input type="text" name="text" class="form-control" id="inputText" placeholder="Введите детальное описание статьи">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="inputCheckbox">Опубликовать</label>
                <input type="hidden" name="published" value="0">
                <input type="checkbox" name="published" value="1" class="form-check-input" id="inputCheckbox">
            </div>
            <button type="submit" class="btn btn-primary">Создать статью</button>
        </form>
    </div>
@endsection
