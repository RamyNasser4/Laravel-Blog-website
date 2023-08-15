@extends('master')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
  
    </head>
    <body>
    
        <div class="newpostcontainer">
            <div class="postheader">  
            <div class="name">Aly</div>
            <div class="userid">901</div>
            </div>
            <div class="title">
                <input type="text" class="titletext" placeholder="Write your title here"></div>
            <div class="postcontent">
                <input type="text" class="contenttext" placeholder="What's on your mind?"></div>
            <div class="postbuttons">
                <div class="cancelbutton">
                    <a class="cancel">Cancel</a>
                </div>
                <div class="createbutton">
                    <a class="create"href="/">Post</a>
                </div>
                
            </div>
        </div>
        
    </body>
    @endsection