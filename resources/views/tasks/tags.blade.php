@php
    $tags = $tags ?? collect();
@endphp

@if($tags->isNotEmpty())
    <div>
        @foreach($tags as $tag)
            <a href="/tasks/tags/{{ $tag->getRouteKey() }}" style="color: gray;">{{ $tag->name }}</a>
        @endforeach
    </div>
@endif
