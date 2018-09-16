<div class="blog-post story rounded">
    <div class="container">
    <h4 class="blog-post-title">
        <a href="/stories/{{ $story->id}}">
            {{$story->title}}
        </a>
        <img src="../images/rb.gif" style="height: 95px; ">
    </h4>
    <b class="blog-post-meta">Рубрика:  {{$story->section}}</b>

    <p>{{$story->body}}</p>

    <b>Автор: {{$story->author}}</b>
    <p>Источник: <a href="{{$story->source}}">{{$story->source}}</a></p>
    </div>
</div>