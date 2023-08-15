@extends('master')
@section('title', 'Home')
@section('content')
<div class="d-flex flex-column h-100 align-items-center">
            <div class="d-flex flex-column justify-content-center items-center text-center mb-5">
                <div class="p-5 fw-bold text-center" style="font-size: 5em;">Welcome to Blog Page</div>
                <div class=" px-5 fs-4 text-center">Thank you for visiting my blog page. This is a test page built with laravel .</div>
            </div>
            @auth
            <button type="button"  class="btn btn-primary btn-lg btn-block w-50 my-5 d-flex justify-content-center align-items-center" href="/newpost"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg me-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>Add new post</button>
@endauth
@foreach ($posts as $post)
            <div class="px-5 d-flex flex-column">
                <div class=" pt-5 pb-3 fs-1 fw-bold">{{$post->post_title}}</div>
                <div class=" w-50 fs-4">{{$post->post_body}}</div>
                <a href=""><button type="button" class="btn btn-primary mt-3" style="width: 10em;">Read more</button></a>
            </div>
            </div>
            @endforeach
@endsection