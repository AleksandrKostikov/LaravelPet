@extends('layout.master')

@section('title')
    {{ "Админ. раздел" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Отзывы
        </h3>

        <table border="1">
        @foreach($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->message }}</td>
                <td>{{ $feedback->created_at }}</td>
            </tr>
        @endforeach
        </table>

        <nav class="blog-pagination" aria-label="Pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>
    </div>
@endsection
