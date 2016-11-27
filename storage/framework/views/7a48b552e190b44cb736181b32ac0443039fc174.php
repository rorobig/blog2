<?php /* <nav class="navbar navbar-default">
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
              <li><a href=" <?php echo e(route('logout')); ?>">Logout</a></li>

              <li class="dropdown">
             
                <li><a href="<?php echo e(route('login')); ?>" >Login<span class='glyphicon glyphicon-log-in' aria-hidden='true'></span></a></li>
                
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>  */ ?>

<div class="ui pointing menu">  
<a href="" class="item"><img src="<?php echo e(('/img/share.svg')); ?>" alt=""> Rorotech</a>
  <a href="/" class="<?php echo e(Request::is('/')? "active": ""); ?> item">
    Home
  </a>
  <a href="/blog" class="<?php echo e(Request::is('blog')? "active": ""); ?> item">
    Blog
  </a>
  <a  href="/about" class="<?php echo e(Request::is('about')? "active": ""); ?> item">
    About
  </a>
  <a  href="/contact" class="<?php echo e(Request::is('contact')? "active": ""); ?> item">
    Contact
  </a>
  <div class="right menu">

    <div class="item">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
    </div>
   
      <?php if(Auth::check()): ?>
    <div class="ui dropdown item">Hello <?php echo e(Auth::user()->name); ?>  
       <i class="dropdown icon"></i>
      <div class="menu">
      <a class="item" href="<?php echo e(route('posts.index')); ?>">Posts</a>
        <a class="item "href=" <?php echo e(route('logout')); ?>">Logout</a>
      </div>
    </div>
    <?php else: ?>

     <div class="item">
      <a style="color:black" href="<?php echo e(route('login')); ?>" >Login<span class='glyphicon glyphicon-log-in' aria-hidden='true'></span></a>
    </div>
 <?php endif; ?>
  </div>


</div>

<script>
  $('.ui.dropdown')
  .dropdown()
;

</script>

