@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Post Numero: {{$post->id}}
    </div>

    <div class="card-body">
        <h5 class="card-title">Title: {{$post->title}}</h5>
        <p class="card-text">content: {{$post->content}}</p>
        <p class="card-text">category:  
            @if ($post->category)
            {{$post->category->name}}
            @endif
        </p>
        <h5>Tags</h5>
        <p class="card-text">
            @forelse ($post->tags as $tag)
                <span class="badge badge-success">{{$tag->name}}</span>
            @empty
                <span>No Tags</span>
            @endforelse


        </p>

        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Go back</a>
    </div>
</div>
@endsection