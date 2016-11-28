@extends('main')
@section('title','| All categories')
@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>Categories</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				@foreach($categories as $category)
					<th>{{$category->id}}</th>	
					<td>{{$category->name}}</td>
				</tr>
				@endforeach
			</tbody>		
		</table>

	</div> <!--end of col md8 -->

	<div class="col-md-3">
		<div class="well">
			{!! Form::open(['route' => 'categories.store','method'=>'POST']) !!}
			<h2>New Catergory</h2>

			{!! Form::label('Name')!!}
			{!!Form::text('name',null,['class'=>'form-control'])!!}
			<br>
			{!!Form::submit('Create new Catergory',['class'=>'ui primary button btn-block'])!!}
			{!!Form::close()!!}
		</div>
	</div>
</div>

@endsection