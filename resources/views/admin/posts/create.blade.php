@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control 
                @error('title') 
                    is-invalid 
                @enderror" id="titolo" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="categ" class="form-label">Category</label>
                <select name="category_id" id="categ" class="form-control">
                    <option value="">Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" 
                        @if ($category->id == old('category_id')) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea class="form-control 
                @error('title') 
                    is-invalid 
                @enderror" name="content" id="desc" cols="30" rows="10">{{old('content')}}</textarea> 
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror           
            </div>

            <h5>Tags</h5>
            @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}"
                
                @if(in_array($tag->id, old('tags',[])))
                    checked
                @endif
                name="tags[]">
                <label class="form-check-label" for="tag{{$tag->id}}">{{$tag->name}}</label>
            </div>  
            @endforeach
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection