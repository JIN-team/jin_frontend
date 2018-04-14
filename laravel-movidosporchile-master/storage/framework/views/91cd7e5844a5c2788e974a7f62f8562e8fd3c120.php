<?php $__env->startSection('style'); ?>
<?php echo e(Html::style('css/organizacion.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 class="titulo">¿Quiénes somos?</h1>

<p>
	Somos la Comunidad de Organizaciones Solidarias, que reúne a 183 Fundaciones y Corporaciones que trabajan en la superación de la pobreza y la exclusión social, que junto a las organizaciones sociales reunidas en el Colunga Hub, Red de Voluntarios y a otras organizaciones de la sociedad civil como Greenpeace, Hogar de Cristo, Desafío Levantemos Chile, nos hemos articulado para poner a disposición de todos los ciudadanos una plataforma donde puedan encontrar cómo y dónde ayudar a las zonas de emergencia. El sitio busca canalizar ayudas y que todos podamos contribuir con la donación de bienes, de dinero y voluntariado de manera informada.
	Movidos x Chile… Ayuda informado.
</p>

<img class="fundaciones mx-auto d-block" src="imagenes/fundaciones.png">




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-sidebarless', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>