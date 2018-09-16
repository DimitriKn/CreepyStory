@extends ('master')


@section('content')

    @foreach($stories as $story)

        @include('stories.stories')

    @endforeach

@endsection