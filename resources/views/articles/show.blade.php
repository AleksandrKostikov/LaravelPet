@extends('layout.master')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $article->title }}
        </h3>

        <p>{{ $article->created_at->toFormattedDateString() }}</p>
        <p>{{ $article->text }}</p>

        <hr>
        <a href="/">Вернуться на главную</a>
    </div>
@endsection
