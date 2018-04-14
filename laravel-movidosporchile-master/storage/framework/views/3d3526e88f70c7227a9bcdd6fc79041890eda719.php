<?php $__env->startSection('style'); ?>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.png">
<?php echo e(Html::style('css/loginReg.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<br />
<br />
<div class="titulo">
  <h1> Iniciar Sesión </h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
              <label for="rut" class="col-md-4 control-label">Rut</label>

              <div class="col-md-6">
                <input id="rut" type="text" class="form-control" name="rut" value="<?php echo e(old('rut')); ?>" placeholder="11111111-1" required autofocus>

                <?php if($errors->has('rut')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('rut')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
              <label for="password" class="col-md-4 control-label">Contraseña</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" placeholder="*****" required>

                <?php if($errors->has('password')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Recordarme
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Ingresar
                </button>

                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                  Olvidaste tu contraseña?
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-sidebarless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>