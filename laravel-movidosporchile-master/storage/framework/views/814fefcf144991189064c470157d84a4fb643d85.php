<?php $__env->startSection('style'); ?>
<?php echo e(Html::style('css/contacto.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 class="titulo">Contacto</h1>

<form action="/contactos" method="POST">
	<div class="form-row">
		<div class="col">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="apellido">Apellido:</label>
				<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="movidosxchile@mxc.cl">
	</div>

	<div class="form-group">
		<label for="message">Mensaje:</label>
		<textarea class="form-control" rows="5" id="message" name="message"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-sidebarless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>