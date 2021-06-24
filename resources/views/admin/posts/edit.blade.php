@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="my-2">
            Edit:
            <a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a>
        </h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                {{-- Print errors --}}
                @if ($errors->any())
                    <div class="my-3 ">
                        <ul class="list-group ">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item alert alert-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                        
                    </div>
                @endif

                <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
                    {{-- protection --}}
                    @csrf
                    @method('PATCH')

                    <div class="my-3">
                        <label for="create-title">Title post *</label>
                        <input id="create-title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{old('title', $post->title)}} "> 
                        @error('title')
                            <div>{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="create-content">Content post *</label>
                        <textarea id="create-content" name="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{old('content', $post->content)}}</textarea>
                        @error('content')
                            <div>{{$message}}</div>
                        @enderror
                    </div>

                    {{-- caregories --}}
                    <div class="mb-3">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    @if($category->id == old('category_id', $post->category_id)) selected @endif>{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div>{{$message}}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection