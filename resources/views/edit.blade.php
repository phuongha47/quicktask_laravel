@extends('layouts.master')
@section('title','post')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿</title>
    <link href="node_modules\bootstrap\dist\css\bootstrap.min.css" type="text/css" rel="stylesheet" >
</head>
<body>
    <a href="{{ route('post_show') }}" class="btn btn-dark m-3">{{ __('update_post.back') }}</a>
    <h1 class="text-center">{{ __('update_post.page_update') }}</h1>
    <div class= "container col-md-4 col-md-offset-4" >
        <form method= "POST" action="{{ route('post_update', $posts->id) }}">
            @csrf
            <div class="mb-3">
                <label for=""><b>{{ __('update_post.title') }}</b></label>
                <input type="text" name="title" class = "form-control" value="{{ $posts->title }}">
            </div>
            <div class="mb-3">
                <label for=""><b>{{ __('update_post.body') }}</b></label>
                <input type="text" name="body" class = "form-control" value="{{ $posts->body }}">
            </div>
            <input type="submit" name="insert" value="{{ __('update_post.update') }}" class="btn btn-success">
        </form>
    </div>   
</body>
</html>
@endsection
