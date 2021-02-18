@extends('layout.master')

@section('title')
    {{ "Список задач" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Список задач
        </h3>

        @foreach($tasks as $task)
            @include('tasks.item')
        @endforeach

        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>
    </div>
@endsection
