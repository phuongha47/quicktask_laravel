@extends('layouts.master')
@section('title','post')
@section('content')
<a href="{{ route('post.show') }}" class="btn btn-dark m-3">{{ __('listPost.back') }}</a>
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
                            <h2>{{ $posts['title'] }}</h2>    
                            <p>{{ $posts['body'] }}</p>
                            <h6>{{ __('detail.author') }}<a href="{{ route('post', $posts->author->author_id) }}"><h5>{{ $posts->author->name }}</h5></a></h6>   
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
