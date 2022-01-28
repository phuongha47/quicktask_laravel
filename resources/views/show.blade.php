@extends('layouts.master')
@section('title','post')
@section('content')
<a href="{{ route('home.index') }}" class="btn btn-dark m-3">{{ __('listPost.back') }}</a>
<h1 class="text-center">{{ __('listPost.title_page') }}</h1>
<a href="{{ route('post.create') }}" class="btn btn-primary m-4">{{ __('listPost.add') }}</a>
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
                            <a href="{{ route('detail', $post->id) }}"><h2>{{ $post->title }}</h2></a>    
                            <p>{{ $post->body }}</p>
                            <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">{{ __('listPost.update') }}</a></td>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input class="btn btn-danger" type="submit" value="{{ __('listPost.delete') }}">
                            </form>
                        </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
