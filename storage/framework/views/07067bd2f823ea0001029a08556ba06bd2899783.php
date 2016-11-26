  <?php echo $__env->make('_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body>
  <?php echo $__env->make('_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

    <div class="container">
      <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo e(Auth::check() ? "Logged in" :"Logged out"); ?>

      <?php echo $__env->yieldContent('content'); ?>
    <hr>
    <p class="text-center">Copyrights Rkwidama <?php echo e(date('Y')); ?> - All rights Reserved</p>
    </div>
  <?php echo $__env->make('_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
  </body>
</html>


