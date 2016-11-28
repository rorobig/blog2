<script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
@extends('main')
@section('title','|Edit blog Post')
@section('content')
	<div class="row">
		{!! Form::model($post,['route' =>['posts.update',$post->id],'method'=>'PUT']) !!}
		<div class="col-md-8">
			{{Form::label('title','Title:')}}
			{{Form::text('title',null,["class"=> 'form-control input-lg']) }}

			{{Form::label('slug','Slug:',["class"=> 'form-spacing-top'])}}
			{{Form::text('slug',null,["class"=> 'form-control'])}}

			{{Form::label('category_id','Category:',["class"=> 'form-spacing-top'])}}
			{{Form::select('category_id',$categories ,null,['class'=>'form-control'] ) 	}}

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
					<a href="{{route('posts.show', ['post'=>$post->id])}}" class="ui primary  button btn-block">Cancel</a>
				</div> 
				<div class="col-sm-6">
				{{Form::submit('Save Changes',['Class'=>'ui primary  button btn-block'])}}
				{{-- <a href="{{route('posts.update', ['post'=>$post->id])}}" class="btn btn-success btn-block">Save Changes</a> --}}
				</div>
			</div>
			</div>
	</div>

{!! Form::close() !!}
</div>


@stop

@section('scripts')

<script>
tinymce.init({
  selector: 'textarea',
  height: 250,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>


