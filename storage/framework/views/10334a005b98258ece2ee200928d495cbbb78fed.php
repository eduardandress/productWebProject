<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(trans('messages.title')); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-16x16.png')); ?>" sizes="16x16"/>
    <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-32x32.png')); ?>" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php echo e(asset('installer/img/favicon/favicon-96x96.png')); ?>" sizes="96x96"/>
    <link href="<?php echo e(asset('installer/css/style.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/materialize.min.css')); ?>" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="<?php echo e(URL::asset('assets/dropify/css/dropify.min.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

    <script src="<?php echo e(URL::asset('assets/js/jquery-3.1.0.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/js/materialize.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/dropify/js/dropify.min.js')); ?>"></script>

   <!-- <script src="<?php echo e(URL::asset('app/node_modules/angular2/bundles/angular2-polyfills.js')); ?>"></script> -->
    <script src="<?php echo e(URL::asset('app/node_modules/core-js/client/shim.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('app/node_modules/zone.js/dist/zone.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('app/node_modules/reflect-metadata/Reflect.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('app/node_modules/systemjs/dist/system.src.js')); ?>"></script>

  </head>
  <body>
    <div class="master">
      <div class="col s6">
        <div class="box">
          <div class="header">
              <h1 class="header__title"><?php echo $__env->yieldContent('title'); ?></h1>
          </div>
          <ul class="step">
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::final')); ?>"><i class="step__icon database"></i></li>
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::company')); ?>"><i class="step__icon  fa-building"></i></li>
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::permissions')); ?>"><i class="step__icon permissions"></i></li>
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::requirements')); ?>"><i class="step__icon requirements"></i></li>
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::environment')); ?>"><i class="step__icon update"></i></li>
            <li class="step__divider"></li>
            <li class="step__item <?php echo e(isActive('EJCInstaller::welcome')); ?>"><i class="step__icon welcome"></i></li>
            <li class="step__divider"></li>
          </ul>
          <div class="main">
            <?php echo $__env->yieldContent('container'); ?>
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>