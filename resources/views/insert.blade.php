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
    <a href="{{ route('post_show') }}" class="btn btn-dark m-3">{{ __('new_post.back') }}</a>
    <h1 class="text-center">{{ __('new_post.page_add') }}</h1>
    <div class= " container col-md-4 col-md-offset-4" >
        <form method= "POST" action="{{ route('post_store') }}">
        @csrf
            <div class="mb-3">
                <label for=""><b>{{ __('new_post.title') }}</b></label>
                <input type="text" name="title" class = "form-control">
            </div>
            <div class="mb-3">
                <label for=""><b>{{ __('new_post.body') }}</b></label>
                <input type="text" name="body" class = "form-control">
            </div>
            <div class="mb-3">
                <label for=""><b>{{ __('new_post.author') }}</b></label>
                <input type="text" name="post_author" class = "form-control">
            </div>
            <input type="submit" value="{{ __('new_post.insert') }}" class="btn btn-primary">
        </form>
    </div>  
</body>
</html>
@endsection
