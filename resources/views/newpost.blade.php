@extends('master')
@section('content')
@php

@endphp
        <div class="newpostcontainer">
            <div class="postheader">  
            <div class="name" name="username">{{$users->name}}</div>
            <div class="userid" name="userid">{{$users->id}}</div>
            </div>
           <form method="post" action="/newpost">
            @csrf
            <div class="title">
                <input type="text"  class="titletext @error('post_title') is-invalid @enderror" id="post_title" name="post_title" placeholder="Write your title here">
                @error('post_title')
                <div class="invalid-feedback text-center" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
                
            <div class="postcontent">
                <input type="text" class="contenttext @error('post_body') is-invalid @enderror" id="post_body" name="post_body" placeholder="What's on your mind?">
                @error('post_body')
                <div class="invalid-feedback text-center" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
                
            <div class="postbuttons">
                <div class="cancelbutton">
                    <a class="cancel" href="/Home">Cancel</a>
                </div>
                <div class="createbutton">
                    <input type="submit" value="Post" class="postbutton">
                </div>
                
            </div>
            </form>
        </div>
        
    @endsection