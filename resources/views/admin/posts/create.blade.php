@extends('template.base')
@section('pageTitle', 'Create New Comic')
@section('contentMain')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('admin.posts.store')}}">
                @csrf
                <div class="mb-3 pt-5">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>

                <div class="mb-3 pt-5">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> 
    </div>
</div>
  
@endsection