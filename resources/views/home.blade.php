@extends('layouts.master')
@section('title','home')
@section('content')       
<div>
      <section class="info">
        <div class = "phone_mail">
          <div class="phone">
            <a href="#">+84 123 456 789</a>
          </div>
          <div class="mail">
            <a href="#">bentory@gmail.com</a>          </div>
          </div>
        
        <div class= "social">
          <div class="fb">
            <i class= "fab fa-facebook"></i>
          </div>
          <div>
            <i class ="fab fa-instagram"></i>
          </div>    
        </div>
      </section>

      <header class="header section-padding">
        <a class ="header__logo" href="#">BENTORY</a>
        <nav class= "header__nav"> 
          <ul>
              <li class="active"><a href="">{{ __('home.home') }}</a></li>
              <li><a href="{{ route('post.show') }}">{{ __('home.post') }}</a></li>
              <li><a href="#">{{ __('home.about') }}</a></li>
              <li><a href="#">{{ __('home.contact') }}</a></li>
          </ul>                      
        </nav>
      </header>
      
      <section class="carousel">
        <div class="carousel__content">
          <h1>{{ __('home.theme') }}</h1>
        </div>      
</div>
@endsection
