@extends('main')

{{-- @section('title',"|$post->title") --}}

@section('content')


<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{!!$post->title!!}</h1>
		<p>{!!$post->body!!}</p>
		<hr>
		<p ><span class="ui tag teal label">Posted in :{{$post->category->name}}</span></p>


	</div>
</div>
@endsection