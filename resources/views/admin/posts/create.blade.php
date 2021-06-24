@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="my-2">Create a new post</h1>

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

                <form action="{{route('admin.posts.store')}}" method="POST">
                    {{-- protection --}}
                    @csrf
                    @method('POST')

                    <div class="my-3">
                        <label for="create-title">Title post *</label>
                        <input id="create-title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{old('title')}} "> 
                        @error('title')
                            <div>{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="create-content">Content post *</label>
                        <textarea id="create-content" name="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{old('content')}}</textarea>
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
                                    @if($category->id == old('category_id')) selected @endif>{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div>{{$message}}</div>
                        @enderror
                    </div>

                    {{-- tags --}}
                    <h4>Tags</h4>
                    <div class="mb-3">
                        @foreach ($tags as $tag)
                            <span class="d-inline-block mr-3">
                                <input type="checkbox" name="tags[]" id="tag{{$loop->iteration}}" value="{{$tag->id}}" 
                                @if(in_array($tag->id, old('tags', []))) checked @endif> 
                                <label for="tag{{$loop->iteration}}">
                                    {{$tag->name}}
                                </label>
                            </span>
                            
                        @endforeach
                        @error('tags')
                            <div>{{$message}}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection