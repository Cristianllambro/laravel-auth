@extends('template.base')
@section('pageTitle', $post->title)
@section('contentMain')
<div class="container">
    <div class="row pt-3 pb-3">
        <div class="col">
            <div class="card mb-3" style="width: 1000px;">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Title: {{$post->title}}</h2>
                            <p class="card-text">Description: {{$post->description}}</p>
                            <p class="card-text">Slug: ${{$post->slug}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection