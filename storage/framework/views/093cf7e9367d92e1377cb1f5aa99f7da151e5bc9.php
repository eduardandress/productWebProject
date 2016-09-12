<div id="main-navbar" class="navbar-fixed">
  <nav class="<?php echo e(isset($demoColors['secondColorClass']) ? $demoColors['secondColorClass'] : ''); ?> <?php echo e(isset($demoColors['navBarColorText']) ? $demoColors['navBarColorText'] : ''); ?>" role="navigation">

    <div class="nav-wrapper container-fluid">


    <a id="logo-container" href="#" class="brand-logo">
        <img height="64px" class="img-responsive" src="<?php if(!is_null($companyInfo)): ?> <?php echo e(URL::asset($companyInfo->logoURL)); ?> <?php else: ?> <?php echo e(URL::asset('assets/images/company.svg')); ?> <?php endif; ?>">
        <span class="compName <?php echo e(isset($demoColors['navBarColorText']) ? $demoColors['navBarColorText'] : ''); ?>"><?php if(!is_null($companyInfo)): ?> <?php echo e(isset($companyInfo->name) ? $companyInfo->name : 'CompanyName'); ?>  <?php endif; ?> </span>
    </a>

      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo e(route('CoreRoutes::landing_page')); ?>"><?php echo e(trans('core::menu.home')); ?></a></li>
        <li><a href="products"><?php echo e(trans('core::menu.products')); ?></a></li>
        <li><a href="about"><?php echo e(trans('core::menu.aboutUs')); ?></a></li>
        <li><a href="contact"><?php echo e(trans('core::menu.contactUs')); ?></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav <?php echo e(isset($demoColors['secondColorClass']) ? $demoColors['secondColorClass'] : ''); ?> ">
        <li><a href="<?php echo e(route('CoreRoutes::landing_page')); ?>"><?php echo e(trans('core::menu.home')); ?></a></li>
        <li><a href="products"><?php echo e(trans('core::menu.products')); ?></a></li>
        <li><a href="about"><?php echo e(trans('core::menu.aboutUs')); ?></a></li>
        <li><a href="contact"><?php echo e(trans('core::menu.contactUs')); ?></a></li>

      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

 
            