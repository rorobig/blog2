@extends('main')
@section('title','|Edit blog Post')
@section('content')
	<div class="row">
		{!! Form::model($post,['route' =>['posts.update',$post->id],'method'=>'PUT']) !!}
		<div class="col-md-8">
			{{Form::label('title','Title:')}}
			{{Form::text('title',null,["class"=> 'form-control input-lg']) }}
			{{Form::label('body','Body:',["class"=> 'form-spacing-top'])}}
			{{Form::textarea('body',null,["class"=> 'form-control'])}}
		</div>

		<div class="col-md-4">
			<div class="well">
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
					<a href="{{route('posts.show', ['post'=>$post->id])}}" class="btn btn-danger btn-block">Cancel</a>
				</div> 
				<div class="col-sm-6">
				{{Form::submit('Save Changes',['Class'=>'btn btn-success btn-block'])}}
				{{-- <a href="{{route('posts.update', ['post'=>$post->id])}}" class="btn btn-success btn-block">Save Changes</a> --}}
				</div>
			</div>
			</div>
	</div>

{!! Form::close() !!}
</div>


@stop