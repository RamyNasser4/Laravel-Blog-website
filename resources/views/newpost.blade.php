@extends('master')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
   
    </head>
    

    <body>
    @foreach($users as $user)
        <div class="newpostcontainer">
            <div class="postheader">  
            <div class="name" name="username">{{$user->name}}</div>
            <div class="userid" name="userid">{{$user->id}}</div>
            </div>
           <form method="post" action="">
            <div class="title">
                <input type="text"  class="titletext" name="post_title" placeholder="Write your title here"></div>
            <div class="postcontent">
                <input type="text" class="contenttext" name="post_body" placeholder="What's on your mind?"></div>
            <div class="postbuttons">
                <div class="cancelbutton">
                    <a class="cancel" href="/Home">Cancel</a>
                </div>
                <div class="createbutton">
                    <a class="create"href="/Home">Post</a>
                </div>
                
            </div>
            </form>
        </div>
    @endforeach
    </body>
    @endsection