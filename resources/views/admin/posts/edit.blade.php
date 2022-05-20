@extends('layouts.admin')
@section('pageTitle', 'Create New Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('admin.posts.store', $post->slug)}}">
                @method('PUT')
                @csrf
                <div class="mb-3 pt-5">
                    <label for="title" class="form-label">{{__('Title')}}:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
                </div>

                
                <div class="form-floating">
                    <label for="description"></label>
                    <textarea class="form-control" placeholder="Description" id="description" name="description" value="{{old('title', $post->description)}}"></textarea>
                </div>

                <div class="mb-3 pt-5">
                    <label for="slug" class="form-label">{{__('Slug')}}:</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug)}}">
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div> 
    </div>
</div>
  
@endsection