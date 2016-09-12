<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('core::EJCTemplate.includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
		<header>
	        <?php echo $__env->make('core::EJCTemplate.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	        <?php echo $__env->make('core::EJCTemplate.includes.bannersection', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</header>

        <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
        </div>

    <?php echo $__env->make('core::EJCTemplate.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>