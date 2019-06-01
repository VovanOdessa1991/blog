{{--<h1>Posts by User {{$user->name}}: </h1>--}}


{{--@foreach($posts as $post)--}}
{{--        <h2><a href="{{route('post.find', $post->id)}}">{{$post->title }}</a></h2>--}}
{{--        <p><a href="{{route('category.find', $post->category->slug)}}">Categori: {{$post->category->name}}</a></p>--}}
{{--        <p>User {{$post->user->name}} at {{$post->created_at->diffForHumans()}}</p>--}}
{{--        <p>Tags</p>--}}
{{--        @foreach($post->tags as $tag)--}}
{{--            {{$tag->name}}--}}
{{--        @endforeach--}}
{{--    <hr>--}}
{{--@endforeach--}}

{{--{{ $posts->links() }}--}}

@extends('layouts.blog-with-sidebar')



@section('content')







    @foreach($posts as $post)

        <div class="jumbotron">
            <h1 class="display-4"><a href="{{route('post.find', $post->id)}}">{{$post->title }}</a></h1>
            <p class="lead"><p><a href="{{route('category.find', $post->category->slug)}}">Categori: {{$post->category->name}}</a></p></p>
            <hr class="my-4">

            <p>{{Str::limit($post->text , 150)}}</p>
            <footer>
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-7 ">
                            <p class="lead">
                                <a class="btn btn-primary btn-lg" href="{{route('post.find', $post->id)}}" role="button">Learn more</a>
                            </p>
                        </div>

                        <div class="col ">
                            <button class="tegs">  <i class="far fa-comment-dots"></i>{{($post->comments_count)}}</button>
                            <button class="tegs"> <i class="fas fa-star"></i> </button>
                            <button class="tegs"> <i class="fas fa-heart"></i> {{($post->likes_count)}}test</button>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-3 "><p>User<a href="{{route('user.find', $post->user->id)}}"> {{$post->user->name}}</a> at {{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="col">
                            <p>Tags</p>

                            @foreach($post->tags as $tag)
                                <a href="{{route('tag.find', $tag->slug)}}">{{$tag->name}}</a>
                            @endforeach

                        </div>
                    </div>

                </div>
            </footer>
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection