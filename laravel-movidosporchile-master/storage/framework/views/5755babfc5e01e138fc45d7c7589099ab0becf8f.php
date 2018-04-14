<?php $__env->startSection('style'); ?>
<?php echo e(Html::style('css/index.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<br />
<br />

<p class="titulo"> Bienvenido a Movidos x Chile </p>

<br />
<br />


<p class="texto">
 Todo lo que necesitas para brindar ayuda a los damnificados de las catástrofes. <br />
 La emergencia no termina, Chile te necesita.
</p>


<br />
<br />
<br />

<div class="sesion">
  <input type="button" value="Iniciar Sesión" class="inicio" onclick = "location='/login'"/>
</div>

<div class="sesion">
  <input type="button" value="Registrarse" class="reg" onclick = "location='/register'"/>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master-sidebarless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>