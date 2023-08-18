@extends('master')
@section('title','onepost')
@section('content')
@foreach($posts as $post)
    <section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">
              <div>
            <!-- Post Title -->
                <h2 class="fw-bold text-primary mb-1">{{$post->post_title}}</h2>
               
              </div>
            </div>
            <!-- content -->
            <h4 style="font-weight:1000;">
              {{$post->post_body}}
            </h4>
            <hr>
            <!-- Show Old Comments Related to this post -->
            <?php
              $count=count($users);
            ?>
            <div class="d-flex flex-column">
                @for($i=0;$i<$count;$i++)
                <h4> {{$users[$i]->name}}:&nbsp; </h4>
                   <h4> {{$comments[$i]->comment_body}}</h4> 
                   <hr>
                     @endfor
             
                
                
                       
            </div>  
            @if(Session::has('loginid'))
            <div class="small d-flex justify-content-start">
              <a href="#newcomment" class="d-flex align-items-center me-3">
                <i class="far fa-comment-dots me-2"></i>
                <!-- drop into text box -->
                <p class="mb-0">Comment</p>
              </a>
            </div>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
                <div class="form-outline w-100">
                
            <form action="/onepost/{{$post->id}}" method="post">
                @csrf
                    <textarea class="form-control @error('comment_body') is-invalid @enderror" id="newcomment" name="comment_body" rows="4"
                    style="background: #fff;"></textarea>
                    @error('comment_body')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror   

                </div>
            </div>
            <div class="float-end mt-2 pt-1">
                <!-- Add new Comment -->
                <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                <!-- back to the Home -->
            </form>
            @endif
            @endforeach
            
              <a href="/Home">
                  <button type="button" class="btn btn-outline-primary btn-sm" >Home</button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

