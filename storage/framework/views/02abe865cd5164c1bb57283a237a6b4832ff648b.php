<?php $__env->startSection('title', '| View Post' ); ?>
	
<?php $__env->startSection('content'); ?>
<div class="row">
		<div class="col-md-8">
			<h1><?php echo e($post->title); ?></h1>

			<p class="lead"><?php echo e(strip_tags($post->body)); ?></p>
		</div>

		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<label for="">Url</label>
				<p><a href="<?php echo e(route('blog.single',$post->slug)); ?>"><?php echo e(route('blog.single',$post->slug)); ?></a></p>
			</dl>
			<dl class="dl-horizontal">
			<label for="">Category</label>
				<p><?php echo e($post->category->name); ?></p>
				</dl>
			<dl class="dl-horizontal">
				<label for="">Created at</label>
				<p><?php echo e(date('M j,Y H:ia',strtotime($post->created_at))); ?></p>
			</dl>

			<dl class="dl-horizontal">
				<label for="">Last updated</label>
				<p><?php echo e(date('M j,Y H:ia',strtotime($post->updated_at))); ?></p>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?php echo e(route('posts.edit', ['post'=>$post->id])); ?>" class="btn ui primary  button btn-block">Edit</a>
				</div> 
				<div class="col-sm-6">
					<?php echo Form::open(['route'=>['posts.destroy',$post->id],'method'=> 'DELETE']); ?>

					<?php echo Form::submit('Delete',['class'=>'ui red button btn-block']); ?>

					<?php echo Form::close(); ?>

				</div>
			</div>
			</div>
	</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>