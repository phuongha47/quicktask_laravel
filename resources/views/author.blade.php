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
                        @foreach($posts->post as $post)
                            <h2> {{ $post->title }} </h2>
                            <p> {{ $post->body }} </p>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
