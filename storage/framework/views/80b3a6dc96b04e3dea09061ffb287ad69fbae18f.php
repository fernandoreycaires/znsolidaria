<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo e(asset('image/fotos/painel1.jpg')); ?>" alt=""><?php echo e($user->name); ?>

                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="#"> Perfil</a>
                    <a class="dropdown-item"  href="#"> Configurações</a>
                    <a class="dropdown-item"  href="#" onclick="event.preventDefault; document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i> Sair
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
                </li>

                
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation --><?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/layout/header.blade.php ENDPATH**/ ?>