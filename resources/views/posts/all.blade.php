@foreach($posts as $post)
        <h2><a href="{{route('post.find', $post->id)}}">{{$post->title }}</a></h2>
        <p><a href="{{route('category.find', $post->category->slug)}}">Categori: {{$post->category->name}}</a></p>
        <p>User<a href="{{route('user.find', $post->user->id)}}"> {{$post->user->name}}</a> at {{$post->created_at->diffForHumans()}}</p>
        <p>Tags</p>
        @foreach($post->tags as $tag)
            <a href="{{route('tag.find', $tag->slug)}}">{{$tag->name}}</a>
        @endforeach
    <hr>
@endforeach

{{ $posts->links() }}