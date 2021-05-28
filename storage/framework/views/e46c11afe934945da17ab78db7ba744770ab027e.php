<!-- jQuery -->
<script src="<?php echo e(asset('theme_lib/vendors/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('theme_lib/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('site/bootstrap.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('theme_lib/vendors/fastclick/lib/fastclick.js')); ?>"></script>
<!-- NProgress -->
<script src="<?php echo e(asset('theme_lib/vendors/nprogress/nprogress.js')); ?>"></script>
<!-- Chart.js -->
<script src="<?php echo e(asset('theme_lib/vendors/Chart.js/dist/Chart.min.js')); ?>"></script>
<!-- gauge.js -->
<script src="<?php echo e(asset('theme_lib/vendors/gauge.js/dist/gauge.min.js')); ?>"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo e(asset('theme_lib/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('theme_lib/vendors/iCheck/icheck.min.js')); ?>"></script>
<!-- Skycons -->
<script src="<?php echo e(asset('theme_lib/vendors/skycons/skycons.js')); ?>"></script>
<!-- Flot -->
<script src="<?php echo e(asset('theme_lib/vendors/flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot/jquery.flot.time.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot/jquery.flot.stack.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot/jquery.flot.resize.js')); ?>"></script>
<!-- Flot plugins -->
<script src="<?php echo e(asset('theme_lib/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
<!-- DateJS -->
<script src="<?php echo e(asset('theme_lib/vendors/DateJS/build/date.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('theme_lib/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo e(asset('theme_lib/vendors/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme_lib/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo e(asset('theme_lib/build/js/custom.min.js')); ?>"></script>

<!-- Customizado -->

<!-- TELA /SISTEMA/ACOES/ACOES/ACAO -->
<!-- Widget GAUGE doações -->
<script type="text/javascript">
    var opts = {
      angle: 0, 
      lineWidth: 0.44,
      radiusScale: 1, // Raio relativo
      pointer: {
        length: 0.6, // // Relativo ao raio do Gauge
        strokeWidth: 0.035, // Largura do traço
        color: '#000000' // Cor do ponteiro
      },
      limitMax: false,     // Se false, valor maximo aumenta automaticamente se valor > valor maximo
      limitMin: false,     // Se true, o valor mínimo será fixo
      colorStart: '#1ABC9C',   // Cores
      colorStop: '#1ABC9C',    
      strokeColor: '#F0F3F3',  
      generateGradient: true,
      highDpiSupport: true,  
      
    };
    var target = document.getElementById('chart_gauge_doacao'); // Elemento onde o gauge deve ser criado
    var gauge = new Gauge(target).setOptions(opts); // Criar gauge
    gauge.maxValue = 200; // Valor maximo
    gauge.setMinValue(0);  // Valor minimo
    gauge.animationSpeed = 32; // Velocidade da animacao
    gauge.set(50); // Valor a ser marcado pelo ponteiro
</script>
<!-- ./Widget GAUGE doações -->
<?php /**PATH /var/www/html/znsolidaria/resources/views/sistema/layout/javascript.blade.php ENDPATH**/ ?>