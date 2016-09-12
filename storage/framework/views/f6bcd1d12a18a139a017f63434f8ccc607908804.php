  <footer class="page-footer <?php echo e(isset($demoColors['thirdColorClass']) ? $demoColors['thirdColorClass'] : ''); ?> grey-text text-lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 ><?php if(!is_null($companyInfo)): ?><?php echo e(isset($companyInfo->name) ? $companyInfo->name : 'CompanyName'); ?> <?php else: ?> <?php echo e(trans('core::main.companyName')); ?> <?php endif; ?></h5>
          <p id="descriptionCompany" style="word-wrap: break-word"><?php if(!is_null($companyInfo)): ?><?php echo e(isset($companyInfo->description) ? $companyInfo->description : 'Description'); ?> <?php else: ?> <?php echo e(trans('core::main.companyDescription')); ?> <?php endif; ?></p>

        </div>
        <div class="col l3 s12">
          <h5 ><?php echo e(trans('core::main.navigation')); ?></h5>
          <ul>
            <li><a  href="<?php echo e(route('CoreRoutes::landing_page')); ?>"><?php echo e(trans('core::menu.home')); ?></a></li>
            <li><a  href="products"><?php echo e(trans('core::menu.products')); ?></a></li>
            <li><a  href="about"><?php echo e(trans('core::menu.aboutUs')); ?></a></li>
            <li><a  href="contact"><?php echo e(trans('core::menu.contactUs')); ?></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 ><?php echo e(trans('core::main.connectWithUs')); ?></h5>
          <ul>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainFacebookProfile) and !empty($companyInfo->mainFacebookProfile) ): ?>
            <li> <a  target="_blank" href="<?php echo e($companyInfo->mainFacebookProfile); ?>"><i class="fa fa-facebook-square"></i> Facebook</a></li>
          <?php endif; ?>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainTwitterProfile) and !empty($companyInfo->mainTwitterProfile)): ?>
            <li><a  target="_blank" href="<?php echo e($companyInfo->mainTwitterProfile); ?>"><i class="fa fa-twitter-square"></i> Twitter</a></li>
          <?php endif; ?>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainInstagramProfile) and !empty($companyInfo->mainInstagramProfile)): ?>
            <li><a  target="_blank" href="<?php echo e($companyInfo->mainInstagramProfile); ?>"><i class="fa fa-instagram"></i> Instagram</a></li>
          <?php endif; ?>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainGooglePlusProfile) and !empty($companyInfo->mainGooglePlusProfile)): ?>
            <li><a  target="_blank" href="<?php echo e($companyInfo->mainGooglePlusProfile); ?>"><i class="fa fa-google-plus-official"></i> Google +</a></li>
          <?php endif; ?>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainLinkedInProfile) and !empty($companyInfo->mainLinkedInProfile)): ?>
            <li><a  target="_blank" href="<?php echo e($companyInfo->mainLinkedInProfile); ?>"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
          <?php endif; ?>
          <?php if(!is_null($companyInfo) and isset($companyInfo->mainEmail) and !empty($companyInfo->mainEmail)): ?>
            <li><a  href="#!"><i class="fa fa-envelope"></i> <?php echo e($companyInfo->mainEmail); ?></a></li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#!">E&JC</a>
      </div>
    </div>
    <button class="material-scrolltop <?php echo e($demoColors['mainColorClass']); ?>" type="button"></button>
  </footer>


  <!--  Scripts-->
  <script src="<?php echo e(URL::asset('assets/js/jquery-3.1.0.min.js')); ?>"></script>

  <script src="<?php echo e(URL::asset('assets/js/materialize.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('assets/mScrollTop/material-scrolltop.js')); ?>"></script>

  <script src="<?php echo e(URL::asset('assets/js/init.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('assets/js/readmore.js')); ?>"></script>






