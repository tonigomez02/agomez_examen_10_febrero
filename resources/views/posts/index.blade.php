@extends("layouts.crudLayout")

@section("content")

    <h1>Posts</h1>

    <div class="container-lg d-flex flex-column align-items-center">
        @foreach($posts as $post)

            <div class="card mt-4" style="width: 20rem;">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->summary}}</p>
                    <p>Description: {{$post->description}}</p>
                    <p>Acces: {{$post->access}}</p>

                    @if($post->expired === true)
                        <p>Expired</p>
                    @endif
                    @if($post->commentable === true)
                        <p>Commentable</p>
                    @endif

                    <p>Date of publiction: {{$post->date_publication}}</p>
                    <a href="{{route("posts.edit", $post)}}" class="btn btn-dark">@lang("Edit")</a>
                </div>
            </div>

        @endforeach
    </div>

@endsection
