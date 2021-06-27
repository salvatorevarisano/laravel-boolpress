@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>

        @if($post->category)
            <h3>Category: {{$post->category->name}}</h3>
        @endif

        <div class="mb-5">
            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Edit post</a>
        </div>
        <div>{{$post->content}}</div>
        
        @if(count($post->tags) > 0)
            <div class="mt-3">
                <h4>Tags</h4>
                <ul>
                    @foreach($post->tags as $tag)
                        <li>{{$tag->name}}</li> 
                    @endforeach                    
                </ul>                
            </div>
        @endif
    </div>
    {{-- @dump($post) --}}

@endsection