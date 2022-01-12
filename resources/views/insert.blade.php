@extends('layouts.master')
@section('title','post')
@section('content')
<a href="{{ route('post.show') }}" class="btn btn-dark m-3">{{ __('newPost.back') }}</a>
<h1 class="text-center">{{ __('newPost.page_add') }}</h1>
<div class= " container col-md-4 col-md-offset-4" >
    <form method= "POST" action="{{ route('post.store') }}">
    @csrf
        <div class="mb-3">
            <label for=""><b>{{ __('newPost.title') }}</b></label>
            <input type="text" name="title" class = "form-control">
        </div>
        <div class="mb-3">
            <label for=""><b>{{ __('newPost.body') }}</b></label>
            <input type="text" name="body" class = "form-control">
        </div>
        <div class="mb-3">
            <label for=""><b>{{ __('newPost.author') }}</b></label>
            <input type="text" name="post_author" class = "form-control">
        </div>
        <input type="submit" value="{{ __('newPost.insert') }}" class="btn btn-primary">
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
