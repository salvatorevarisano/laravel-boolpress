@extends('layouts.app')


@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{session('deleted')}}</strong>
                deleted successfully.
            </div>
        @endif
        <h1>OUR POSTS</h1>
        <a href="{{route('admin.posts.create')}}"
            class="btn btn-info mb-5"
        >
            Create
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>

                            {{$post->id}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            @if($post->category)
                                {{$post->category->name}}
                            @elseif(! $post->category)
                                without category
                            @endif
                            

                        </td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.posts.show', $post->id)}}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                        </td>
                        <td>
                            <form class="delete-post-form" action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- posts by category --}}

        <h2>Posts by category</h2>
        @foreach ($categories as $category)
            <h3>{{$category->name}}</h3>
            @forelse ($category->posts as $post)
                <h4><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></h4>
                
            @empty
                Post not found.
            @endforelse
        @endforeach

    </div>

@endsection