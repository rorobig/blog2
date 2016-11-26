@extends('main')

@section('title', '| View Post' )
	
@section('content')
<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			<p class="lead">{{strip_tags($post->body)}}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<dt>Url:</dt>
				<dd><a href="{{route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug)}}</a></dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Created at:</dt>
				<dd>{{ date('M j,Y H:ia',strtotime($post->created_at))}}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last updated:</dt>
				<dd>{{ date('M j,Y H:ia',strtotime($post->updated_at))}}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="{{route('posts.edit', ['post'=>$post->id])}}" class="btn btn-primary btn-block">Edit</a>
				</div> 
				<div class="col-sm-6">
					{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=> 'DELETE'])!!}
					{!!Form::submit('Delete',['class'=>'btn btn-danger btn-block'])!!}
					{!!Form::close()!!}
				</div>
			</div>
			</div>
	</div>
	</div>


@endsection