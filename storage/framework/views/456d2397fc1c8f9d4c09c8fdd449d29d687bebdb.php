<?php $__env->startSection('content'); ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Ações</h3>
        </div>

        <div class="title_right">
          <div class="col-md-3 col-sm-3 form-group pull-right top_search">
            <div class="input-group">
                <a href="<?php echo e(route('acoes.acoes.addView')); ?>" class="btn btn-success"><i class="fa fa-plus btn-success"></i> Criar Novo Evento</a>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
              <!-- start recent activity -->
              <ul class="messages">
                <?php $__currentLoopData = $acoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php $data = strtotime($acao->dia); 
                        $dia = date('d',$data);
                        $mes = date('M',$data);
                  ?>
                  <li>
                    <img src="<?php echo e(asset('image/fotos/painel1.jpg')); ?>" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-info"><?php echo e($dia); ?></h3>
                      <p class="month"><?php echo e($mes); ?> </p>
                    </div>
                    <div class="message_wrapper">
                      <?php $__currentLoopData = $comunidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comunidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($comunidade->id == $acao->comunidade): ?>
                          <h4 class="heading"><?php echo e($comunidade->comunidade); ?> </h4>
                        <?php endif; ?>    
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <blockquote class="message"><?php echo e($acao->descricao); ?> </blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                        <a href="<?php echo e(route('acoes.acoes.acaoView',['acao'=>$acao->id])); ?> "><i class="fa fa-eye"></i> Visualizar Ação</a>
                      </p>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              <!-- end recent activity -->
            </div>
          </div>
      </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        
            
        
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema/layout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/acoes/acoes/index.blade.php ENDPATH**/ ?>