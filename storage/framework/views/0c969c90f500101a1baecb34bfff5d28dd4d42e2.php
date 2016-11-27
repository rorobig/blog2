<?php $__env->startSection('title','|blog'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Blog</h1>
	</div>
</div>
<?php foreach($posts as $post): ?>
<div class="row">
	<div class="col-md-12 col-md-offset-2">
		<h2><?php echo e($post->title); ?></h2>
		<h5>Pubished: <?php echo e(date('M j,Y',strtotime($post->created_at))); ?></h5>
		<p><?php echo substr($post->body,0,250); ?><?php echo strlen($post->body)>250?'...':""; ?></p>
		<?php /* <a href="<?php echo e(route('blog.single',$post->id)); ?>" class="btn btn-primary">Read More</a> */ ?>
		  <a href="<?php echo e(url('blog/'.$post->slug)); ?>" class="ui primary  button">Read More</a>
	<hr>
	</div>
</div>
<?php endforeach; ?>
<div class="row">
	<div class="col-md-12">
		<div class="text-center">
			<?php echo $posts->links();; ?>

		</div>
	</div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>