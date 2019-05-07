<h1>Posts by Category {{$category->name}}: </h1>


@foreach($posts as $post)
        <h2><a href="{{route('post.find', $post->id)}}">{{$post->title }}</a></h2>

        <p>User {{$post->user->name}} at {{$post->created_at->diffForHumans()}}</p>
        <p>Tags</p>
        @foreach($post->tags as $tag)
            {{$tag->name}}
        @endforeach
    <hr>
@endforeach

{{ $posts->links() }}