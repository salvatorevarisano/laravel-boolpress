@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <a class="btn btn-success" href="{{route('admin.posts.show', $post->id)}}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection