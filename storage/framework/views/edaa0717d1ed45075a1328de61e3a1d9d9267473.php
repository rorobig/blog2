<?php /* <?php $__env->startSection('title',"|$post->title"); ?> */ ?>

<?php $__env->startSection('content'); ?>


<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1><?php echo $post->title; ?></h1>
		<p><?php echo $post->body; ?></p>
		<hr>
		<p ><span class="ui tag teal label">Posted in :<?php echo e($post->category->name); ?></span></p>


	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>