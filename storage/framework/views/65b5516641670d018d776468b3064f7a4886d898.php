<?php $__env->startSection('content'); ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Cadastro de Familias</h3>
      </div>

      <form action="<?php echo e(route('acoes.familia.index.busca')); ?> " method="post">
        <?php echo csrf_field(); ?>
        <div class="title_right">
          <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
              <a href="<?php echo e(route('acoes.familia.addView')); ?>" class="btn btn-default btn-success" >Novo <i class="fa fa-plus"></i></a>
              <input type="number" name="cpf" class="form-control" placeholder="Procurar por CPF">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </form>
    
    <div class="row" style="display: <?php echo e($classe); ?>;">
      <div class="col-md-6 col-sm-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Retorno da busca</h2>
            <ul class="nav navbar-right panel_toolbox">
              </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Visualizar</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $buscas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($busca->ip); ?></th>
                    <td><?php echo e($busca->nome); ?></td>
                    <td><?php echo e($busca->cpf); ?></td>
                    <td>
                      <a href="<?php echo e(route('acoes.familia.PerfilView',['perfil' => $busca->id])); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-user"> </i> Ver Perfil
                      </a>
                    </td>
                  </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="x_panel">
          <div class="x_content">
              <div class="col-md-12 col-sm-12  text-center">
                <!--Não remover essa div-->
              </div>

              <div class="clearfix"></div>
              
              <!-- CARTÕES -->
              <?php $__currentLoopData = $familias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4 col-sm-4  profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    <?php $__currentLoopData = $comunidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comunidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($familia->comunidade == $comunidade->id): ?>
                        <h4 class="brief"><i>Comunidade: <?php echo e($comunidade->comunidade); ?> </i></h4>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="left col-md-7 col-sm-7">
                      <h2><?php echo e($familia->nome); ?> </h2>
                      <?php $__currentLoopData = $observacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $observacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($observacao->familia == $familia->id): ?>
                          <p><strong>Observação: </strong> <?php echo e($observacao->observacao); ?> </p>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <ul class="list-unstyled">
                        <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($endereco->familia == $familia->id): ?>
                            <li><i class="fa fa-building"></i><strong> Endereço:</strong></li> <?php echo e($endereco->logradouro); ?>, <?php echo e($endereco->numero); ?> 
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $telefones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $telefone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($telefone->familia == $familia->id): ?>
                              <li><i class="fa fa-phone"></i><strong> Telefone:</strong></li> +55 <?php echo e($telefone->telefone); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                    </div>
                    <div class="right col-md-5 col-sm-5 text-center">
                      <img src="<?php echo e(asset('theme_lib/production/images/user.png')); ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                  <div class=" profile-bottom text-center">
                    
                    <div class=" col-sm-12 emphasis">
                      <a href="<?php echo e(route('acoes.familia.PerfilView',['perfil' => $familia->id])); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-user"> </i> Ver Perfil
                      </a>
                    </div>
                  </div>
                </div>
              </div>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- ./ CARTÕES -->
              
          </div>
        </div>
    </div>
  </div>
</div>
<!-- /page content -->
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema/layout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/acoes/familia/index.blade.php ENDPATH**/ ?>