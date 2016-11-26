@extends('main')
@section('title' ,'|Create New Post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create new Post</h1>
			<hr>
			 <form method="POST" action="{{ route('posts.store') }}">
      			<div class="form-group">
        			<label name="title">Title:</label>
       				<input id="title" name="title" class="form-control">
      			</div>

            {{ Form::label('slug','Slug:') }}
            {{ Form::text('slug',null,array('class'=>'form-control','', 'required'=>
            '','minlenght'=>'5','maxlenght'=>'255')) }}


      			<div class="form-group">
        			<label name="body" class="form-spacing-top">Post Body:</label>
        			<textarea id="body" name="body" rows="10" class="form-control "></textarea>
      			</div>
      				<input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
      				<input type="hidden" name="_token" value="{{ Session::token() }}">
   		  </form>

		</div>
	</div>

@endsection