@extends('main')

@section('title', '| View Post' )
	
@section('content')
<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
 	<img src="http://i.imgur.com/XQbcjvU.jpg" alt="">
 	<img src="http://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com">
			<p class="lead">{!!$post->body!!}</p>

		</div>

		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<label for="">Url</label>
				<p><a href="{{route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug)}}</a></p>
			</dl>
			<dl class="dl-horizontal">
			<label for="">Category</label>
				<p>{{$post->category->name}}</p>
				</dl>
			<dl class="dl-horizontal">
				<label for="">Created at</label>
				<p>{{ date('M j,Y H:ia',strtotime($post->created_at))}}</p>
			</dl>

			<dl class="dl-horizontal">
				<label for="">Last updated</label>
				<p>{{ date('M j,Y H:ia',strtotime($post->updated_at))}}</p>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="{{route('posts.edit', ['post'=>$post->id])}}" class="btn ui primary  button btn-block">Edit</a>
				</div> 
				<div class="col-sm-6">
					{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=> 'DELETE'])!!}
					{!!Form::submit('Delete',['class'=>'ui red button btn-block'])!!}
					{!!Form::close()!!}
				</div>
			</div>
			</div>
	</div>
	</div>
<p ><span class="ui tag teal label">Posted in :{{$post->category->name}}</span></p>
	

@endsection