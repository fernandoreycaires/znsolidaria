<?php $__env->startSection('content'); ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Comunidades</h3>
        </div>
        <div class="title_right">
          <div class="col-md-2 col-sm-2  form-group pull-right top_search">
            <div class="input-group">
              <a href="<?php echo e(route('acoes.comunidade.addView')); ?>" class="btn btn-default btn-success" >Novo <i class="fa fa-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-6 col-sm-6">
        <div class="x_panel">
          <div class="x_title">
            <h2><small>Comunidades cadastradas </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="<?php echo e(route('acoes.comunidade.addView')); ?>" ><i class="fa fa-plus text-success"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Comunidade</th>
                  <th>Familias</th>
                  <th>Visualizar</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $comunidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comunidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($comunidade->id); ?></th>
                  <td><?php echo e($comunidade->comunidade); ?> </td>
                  <td><?php echo e($qtdfamilias[$comunidade->id]); ?></td>
                  <td><a href="<?php echo e(route('acoes.comunidade.dados',['comunidadeID' => $comunidade->id ])); ?>"><i class="fa fa-eye text-success"></i></a></td>
                </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-6">
        
          <div class="x_content">
            <div class="animated flipInY">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <div class="count"><?php echo e($qtdcomunidades); ?> </div>

                <h3>Comunidades</h3>
                <p>Comunidades em assistencia.</p>
              </div>
            </div>
          </div>
        
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
        
            
        
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema/layout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/acoes/comunidade/index.blade.php ENDPATH**/ ?>