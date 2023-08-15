<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 15 @yield('title')</title>
  <style>
.newpostcontainer{
    width:30%;
    padding:1em;
border-color:rgb(1, 1, 131);
border-width:1px;
border-radius:1em;
border-style:solid;
margin:auto;
margin-top:3em;

}
.postbuttons{
    display:flex;
    justify-content:space-between;
    
}
.postbuttons{
    padding-top:2em;
}
.createbutton{
    padding-right:1em;
}

.cancelbutton{
    padding-left:1em;
   
}
.cancel{
    color:rgb(68, 67, 67);
}
.create{

color:rgb(6, 6, 128);
font-weight:600;
  
}
.name{
padding-bottom:1em;
}
.postheader{
display:flex;
    color:rgb(68, 67, 67);
    font-weight:400 ;

}
.contenttext{
    width:100%;
    height:50px;
    text-align:center;
    border:none;
}
.titletext{
    width:30%;
    height:20px;
    border:none;
    margin-bottom:2em;
    text-align:center;
    
}
.title{
    display:flex;
    justify-content:center;
  
}
.userid{
    padding-left:0.5em;
}
::-webkit-input-placeholder{
    text-align:center;
    display:flex;
    justify-content: center;
    align-items:center;
}

  </style>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div class="h-100">
        <header>@include('header')</header>
        <div id="main" class="d-flex flex-column justify-center items-center" style="height: 100%;">@yield('content')</div>
        <footer>@include('footer')</footer>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>