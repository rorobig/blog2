@extends('main')
@section('title', '| Home')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div style="margin-top: 10px;" class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my blog where you can find projects that i'm working on and opinions i have about diffrent subjects.</p>
            <p><a class="ui primary  button large" href="#" role="button">Popular Post</a></p>

          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
           <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{!! substr($post->body, 0, 300) !!}{!! strlen(strip_tags($post->body)) > 300 ? "..." : "" !!}</p>



    <a style="color:white" href="{{ url('blog/'.$post->slug) }}">
     <button class="ui button primary" >
    <span class="">Read me</span>
</a>

</button>
                    </div>

                    <hr>

                @endforeach

            </div>






        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>

</div>




        </div>
      </div>
@endsection 