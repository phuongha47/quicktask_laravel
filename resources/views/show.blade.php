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
    <a href="{{ route('home') }}" class="btn btn-dark m-3">{{ __('list_post.back') }}</a>
    <h1 class="text-center">{{ __('list_post.title_page') }}</h1>
    <a href="{{ route('post_create') }}" class="btn btn-primary m-4">{{ __('list_post.add') }}</a>
    <br>
    <br>
    <div class="row m-4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="well blog">
                <div class="row">
                    <div class="col-xs-5 col-sm-5 col-md-12 col-lg-12">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-12">
                        <div class="blog-details">
                            @foreach($posts as $post)
                            <tr>
                                <a href="{{ route('detail', $post->id) }}"><h2 > {{ $post->title }}　</h2></a>    
                                <p> {{ $post->body }}　</p>
                                <td><a href="{{ route('post_delete', $post->id) }}" class="btn btn-danger">{{ __('list_post.delete') }}</a></td>
                                <td><a href="{{ route('post_edit', $post->id) }}" class="btn btn-success">{{ __('list_post.update') }}</a></td>
                            </tr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
