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
                <h6 class="fw-bold text-primary mb-1">{{$post->post_title}}</h6>
               
              </div>
            </div>
            <!-- content -->
            <p style="font-weight: 1000 ;">
              {{$post->post_body}}
            </p>
            <hr>
@endforeach
            <!-- Show Old Comments Related to this post -->
            @foreach($comments as $comment)
            <div>
                  <p>
                    {{$comment->comment_body}} <br>
                  </p>  

            </div>
            <hr>
            @endforeach
            
            <div class="small d-flex justify-content-start">
              <a href="#textAreaExample" class="d-flex align-items-center me-3">
                <i class="far fa-comment-dots me-2"></i>
                <!-- drop into text box -->
                <p class="mb-0">Comment</p>
              </a>
             
            </div>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <div class="form-outline w-100">
              @auth
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
                <!-- Add new Comment -->
              <button type="button" class="btn btn-primary btn-sm">Post comment</button>
              <!-- back to the Home -->
              @endauth
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