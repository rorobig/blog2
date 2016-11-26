<nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="<?php echo e(Request::is('/')? "active": ""); ?>"><a href="/">Home</a></li>
            <li class="<?php echo e(Request::is('blog')? "active": ""); ?>"><a href="/blog">Blog</a></li>
            <li class="<?php echo e(Request::is('about')? "active": ""); ?>"><a href="/about">About</a></li>
            <li class="<?php echo e(Request::is('contact')? "active": ""); ?>"><a href="/contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(Auth::check()): ?>
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo e(route('posts.index')); ?>">Posts</a></li>
                <?php /* <li><a href="#">Another action</a></li> */ ?>
                <?php /* <li><a href="#">Something else here</a></li> */ ?>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
              </ul>
            </li>
            <?php else: ?>
            <?php /* <a href="<?php echo e(route('login')); ?>" class="btn btn-default">Login</a> */ ?>
              <li class="dropdown">
             
                <li><a href="<?php echo e(route('login')); ?>" >Login<span class='glyphicon glyphicon-log-in' aria-hidden='true'></span></a></li>
                
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
