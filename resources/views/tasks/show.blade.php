@extends('layout.master')

@section('title')
    {{ $task->title }}
@endsection

@section('content')
    <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            {{ $task->title }}
        </h3>

        @include('tasks.tags', ['tags' => $task->tags])

        <h4>{{ $task->body }}</h4>

        @if($task->steps->isNotEmpty())
        <ul class="list-group">
            @foreach($task->steps as $step)
                <li class="list-group-item">
                    <form method="POST" action="/completed-steps/{{ $step->id }}">
                        @if($step->completed)
                            @method('DELETE')
                        @endif
                        @csrf
                        <div class="form-check">
                            <label class="form-check-label {{ $step->completed ? 'completed' : '' }}">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="completed"
                                    onclick="this.form.submit()"
                                    {{ $step->completed ? 'checked' : '' }}
                                >
                                {{ $step->description }}
                            </label>
                        </div>
                    </form>
                </li>
            @endforeach
        </ul>
        @endif

        <form class="card card-body mb-4" method="POST" action="/tasks/{{ $task->id }}/steps">
            @csrf
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Шаг"
                    value="{{ old('description') }}"
                    name="description"
                >
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

        @include('layout.errors')

        <hr>
        <a href="/tasks/{{ $task->id }}/edit">Изменить</a><br>
        <a href="/tasks">Вернуться к списку задач</a>
    </div>
@endsection
