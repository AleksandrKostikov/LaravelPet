@extends('layout.master')

@section('title')
    {{ "Список задач" }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Список задач
        </h3>

        @each('tasks.item', $tasks, 'task')

        {{ $tasks->appends(['sort' => 'title'])->links() }}

    </div>
@endsection
