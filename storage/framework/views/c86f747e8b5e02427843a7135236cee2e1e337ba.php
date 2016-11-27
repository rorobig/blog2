<?php $__env->startSection('title', '| Home'); ?>
<?php $__env->startSection('content'); ?>
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="ui primary  button large" href="#" role="button">Popular Post</a></p>

          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
           <div class="col-md-8">
                
                <?php foreach($posts as $post): ?>

                    <div class="post">
                        <h3><?php echo e($post->title); ?></h3>
                        <p><?php echo substr($post->body, 0, 300); ?><?php echo strlen(strip_tags($post->body)) > 300 ? "..." : ""; ?></p>



    <a style="color:white" href="<?php echo e(url('blog/'.$post->slug)); ?>">
     <button class="ui button primary" >
    <span class="fa fa-arrow-right before"></span>
    <span class="after">Read more</span>
</a>

</button>
                    </div>

                    <hr>

                <?php endforeach; ?>

            </div>






        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>

</div>




        </div>
      </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>