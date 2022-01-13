@extends('layouts.master')
@section('title','post')
@section('content')
<a href="{{ route('post.show') }}" class="btn btn-dark m-3">{{ __('updatePost.back') }}</a>
<h1 class="text-center">{{ __('updatePost.page_update') }}</h1>
<div class= "container col-md-4 col-md-offset-4" >
    <form method= "POST" action="{{ route('post.update', $posts->id) }}">
        {{ method_field('PUT') }}    
        @csrf
        <div class="mb-3">
            <label for=""><b>{{ __('updatePost.title') }}</b></label>
            <input type="text" name="title" class = "form-control" value="{{ $posts->title }}">
        </div>
        <div class="mb-3">
            <label for=""><b>{{ __('updatePost.body') }}</b></label>
            <input type="text" name="body" class = "form-control" value="{{ $posts->body }}">
        </div>
        <input type="submit" value="{{ __('updatePost.update') }}" class="btn btn-success">
    </form>
</div>  
@if ($errors->any())
        <div class="alert alert-danger w-25 alert_center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif 
@endsection
