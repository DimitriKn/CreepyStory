@extends ('master')


@section('content')

        <div class="blog-post rounded">
        <h4 class="blog-post-title">Последние истории:</h4>
        </div>
        @foreach($stories as $story)

                @include('stories.stories')

        @endforeach




@endsection
