@extends('layout.master')

@section('title')
    {{ "Главная" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Статьи
        </h3>

        @foreach($articles as $article)
            @include('articles.item')
        @endforeach

        {{ $articles->links() }}

    </div>
@endsection
