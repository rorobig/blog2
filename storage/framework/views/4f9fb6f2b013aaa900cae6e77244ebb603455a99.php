<?php $__env->startSection('title','|Edit blog Post'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
		<?php echo Form::model($post,['route' =>['posts.update',$post->id],'method'=>'PUT']); ?>

		<div class="col-md-8">
			<?php echo e(Form::label('title','Title:')); ?>

			<?php echo e(Form::text('title',null,["class"=> 'form-control input-lg'])); ?>

			<?php echo e(Form::label('body','Body:',["class"=> 'form-spacing-top'])); ?>

			<?php echo e(Form::textarea('body',null,["class"=> 'form-control'])); ?>

		</div>

		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
				<dt>Created at:</dt>
				<dd><?php echo e(date('M j,Y H:ia',strtotime($post->created_at))); ?></dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last updated:</dt>
				<dd><?php echo e(date('M j,Y H:ia',strtotime($post->updated_at))); ?></dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="<?php echo e(route('posts.show', ['post'=>$post->id])); ?>" class="btn btn-danger btn-block">Cancel</a>
				</div> 
				<div class="col-sm-6">
				<?php echo e(Form::submit('Save Changes',['Class'=>'btn btn-success btn-block'])); ?>

				<?php /* <a href="<?php echo e(route('posts.update', ['post'=>$post->id])); ?>" class="btn btn-success btn-block">Save Changes</a> */ ?>
				</div>
			</div>
			</div>
	</div>

<?php echo Form::close(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>