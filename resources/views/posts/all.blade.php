@foreach($posts as $post)
        <h2>{{$post->title }}</h2>
        <p>Categori: {{$post->category->name}}</p>
        <p>User {{$post->user->name}} at {{$post->created_at->diffForHumans()}}</p>
        <p>Tags</p>
        @foreach($post->tags as $tag)
            {{$tag->name}}
        @endforeach
    <hr>
@endforeach

{{ $posts->links() }}