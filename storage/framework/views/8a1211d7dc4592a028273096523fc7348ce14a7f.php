<script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>

<?php $__env->startSection('title' ,'|Create New Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create new Post</h1>
			<hr>
			 <form method="POST" action="<?php echo e(route('posts.store')); ?>">
      			<div class="form-group">
        			<label name="title">Title:</label>
       				<input id="title" name="title" class="form-control">
      			</div>

            <?php echo e(Form::label('slug','Slug:')); ?>

            <?php echo e(Form::text('slug',null,array('class'=>'form-control','', 'required'=>
            '','minlenght'=>'5','maxlenght'=>'255'))); ?>


            <?php echo e(Form::label('category','Category:')); ?>

            <select class="form-control" name="category_id" id="">
             <?php foreach($categories as $category): ?>
              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
              <?php endforeach; ?>


            </select>

      			<div class="form-group">
        			<label name="body" class="form-spacing-top">Post Body:</label>
        			<textarea id="body" name="body" rows="10" class="form-control "></textarea>
      			</div>
      				<input type="submit" value="Create Post" class="ui primary  button large btn-block">
      				<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
   		  </form>

		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

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
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>