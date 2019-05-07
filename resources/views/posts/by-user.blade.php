<h1>Posts by User {{$user->name}}: </h1>


@foreach($posts as $post)
        <h2><a href="{{route('post.find', $post->id)}}">{{$post->title }}</a></h2>
        <p><a href="{{route('category.find', $post->category->slug)}}">Categori: {{$post->category->name}}</a></p>
        <p>User {{$post->user->name}} at {{$post->created_at->diffForHumans()}}</p>
        <p>Tags</p>
        @foreach($post->tags as $tag)
            {{$tag->name}}
        @endforeach
    <hr>
@endforeach

{{ $posts->links() }}