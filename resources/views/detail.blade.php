@extends('layouts.master')
@section('title','post')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>投稿</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a href="{{ route('post_show') }}" class="btn btn-dark m-3">{{ __('list_post.back') }}</a>
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
                            <tr>
                                <h2> {{ $posts['title'] }}　</h2>    
                                <p> {{ $posts['body'] }} </p>
                                <h6>{{ __('detail.author') }} <a href="{{ route('post', $posts->author->author_id) }}"><h5>{{ $posts->author->name }} </h5></a></h6>
                                
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
