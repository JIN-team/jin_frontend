<?php $__env->startSection('style'); ?>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.png">
<?php echo e(Html::style('css/loginReg.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="titulo">
  <h1> Registrarse </h1>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"></div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-row">
              <div class="col">
                <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                  <label for="nombre" class="control-label">Nombre</label>
                  <input id="nombre" type="text" class="form-control" placeholder="Nombre y apellido" name="nombre" value="<?php echo e(old('nombre')); ?>" required autofocus>

                  <?php if($errors->has('nombre')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('nombre')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col">
                <div class="form-group<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                  <label for="rut" class="control-label">Rut</label>
                  <input id="rut" type="text" class="form-control" placeholder="1111111-1" name="rut" value="<?php echo e(old('rut')); ?>" required autofocus>

                  <?php if($errors->has('rut')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('rut')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
              <label for="email" class="control-label">E-mail</label>
              <input id="email" type="email" class="form-control" placeholder="movidosxchile@mxc.cl" name="email" value="<?php echo e(old('email')); ?>" required>

              <?php if($errors->has('email')): ?>
              <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
              </span>
              <?php endif; ?>
            </div>

            <div class="form-row">
              <div class="col-md-8">
                <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                  <label for="username" class="control-label">Nombre de usuario</label>
                  <input id="username" type="text" class="form-control" placeholder="Nombre usuario" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                  <?php if($errors->has('username')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('username')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group<?php echo e($errors->has('telefono') ? ' has-error' : ''); ?>">
                  <label for="telefono" class="control-label">Teléfono celular</label>
                  <input id="telefono" type="text" class="form-control" placeholder="900000000" name="telefono" value="<?php echo e(old('telefono')); ?>" required autofocus>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                  <label for="password" class="control-label">Contraseña</label>
                  <input id="password" type="password" class="form-control" placeholder="******" name="password" required>

                  <?php if($errors->has('password')): ?>
                  <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                  <input id="password-confirm" type="password" class="form-control" placeholder="******" name="password_confirmation" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-sidebarless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>