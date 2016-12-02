<?php $__env->startSection('title', '| Login'); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo Form::open(); ?>


				<?php echo e(Form::label('email', 'Email:')); ?>

				<?php echo e(Form::email('email', null, ['class' => 'form-control'])); ?>


				<?php echo e(Form::label('password', "Password:")); ?>

				<?php echo e(Form::password('password', ['class' => 'form-control'])); ?>

				
				<br>
				<?php echo e(Form::checkbox('remember','',TRUE)); ?><?php echo e(Form::label('remember', "Remember Me")); ?>

				
				<br>
				<?php echo e(Form::submit('Login', ['class' => 'btn btn-primary btn-block'])); ?>


				<p><a href="<?php echo e(url('password/reset')); ?>">Forgot My Password</a>


			<?php echo Form::close(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>