<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('core::EJCTemplate.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
        <?php echo $__env->make('core::EJCTemplate.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('core::EJCTemplate.includes.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row">

                <div class="col s12 m4 l3">
                    <?php echo $__env->yieldContent('sidebar-content'); ?>
                </div>

                <div class="col s12 m8 l9">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
        </div>
        <?php echo $__env->make('core::EJCTemplate.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('scripts'); ?>
        
</body>
</html>