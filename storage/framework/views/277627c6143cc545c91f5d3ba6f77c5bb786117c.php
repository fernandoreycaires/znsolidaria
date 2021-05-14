<!DOCTYPE html>
<html lang="pt-br">

  <?php if ($__env->exists('sistema/layout/head')) echo $__env->make('sistema/layout/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="<?php echo e(asset('image/fotos/painel1.jpg')); ?>" alt="znsolidaria" width="48px" height="48px" class="img-circle" > <span>ZN Solidária</span></a>
            </div>

            <div class="clearfix"></div>

            <?php if ($__env->exists('sistema/layout/menu_lateral')) echo $__env->make('sistema/layout/menu_lateral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </div>
        </div>

        <?php if ($__env->exists('sistema/layout/header')) echo $__env->make('sistema/layout/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>
        
        <?php if ($__env->exists('sistema/layout/footer')) echo $__env->make('sistema/layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </div>

    <?php if ($__env->exists('sistema/layout/javascript')) echo $__env->make('sistema/layout/javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
  </body>
</html>
<?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/layout/index.blade.php ENDPATH**/ ?>