<?php $__env->startSection('content'); ?>

  <!--Section 1 -->
  <section class="section <?php echo e(isset($demoColors['mainColorClass']) ? $demoColors['mainColorClass'] : ''); ?> <?php echo e(isset($demoColors['secondFontColorClass']) ? $demoColors['secondFontColorClass'] : ''); ?>  center">
    <h2 class="<?php echo e(isset($demoColors['sectionTitleFontColor']) ? $demoColors['sectionTitleFontColor'] : ''); ?>"><?php echo e(trans('core::main.section1Message1')); ?></h2>
    <p><?php echo e(trans('core::main.section1Message2')); ?></p>
    <a class="waves-effect waves-light <?php echo e(isset($demoColors['secondColorClass']) ? $demoColors['secondColorClass'] : ''); ?> <?php echo e(isset($demoColors['buttonColorText']) ? $demoColors['buttonColorText'] : ''); ?>   btn-large"><i class="fa fa-thumbs-up"></i> <?php echo e(trans('core::main.section1ButtonText')); ?></a>
  </section>

    <!--  Section 2 - Icon Section   -->
  <section class="section">
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center <?php echo e(isset($demoColors['thirdFontColorClass']) ? $demoColors['thirdFontColorClass'] : ''); ?> "><i class="material-icons">settings</i></h2>
          <h5 class="center"><?php echo e(trans('core::main.section2Card1Message1')); ?></h5>

          <p class="light"><?php echo e(trans('core::main.section2Card1Message2')); ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center <?php echo e(isset($demoColors['thirdFontColorClass']) ? $demoColors['thirdFontColorClass'] : ''); ?>"><i class="material-icons">flash_on</i></h2>
          <h5 class="center"><?php echo e(trans('core::main.section2Card2Message1')); ?></h5>
          <p class="light"><?php echo e(trans('core::main.section2Card2Message2')); ?></p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center <?php echo e(isset($demoColors['thirdFontColorClass']) ? $demoColors['thirdFontColorClass'] : ''); ?>"><i class="material-icons">group</i></h2>
          <h5 class="center"><?php echo e(trans('core::main.section2Card3Message1')); ?></h5>
          <p class="light"><?php echo e(trans('core::main.section2Card3Message2')); ?></p>
        </div>
      </div>
    </div>
  </section>
  <div class="divider"></div>

  <!-- Section 3 - Best products section -->
  <?php if(!is_null($bestProducts) and count($bestProducts) > 0): ?>
    <section class="section center">
      <h2><?php echo e(trans('core::main.section3Message1')); ?></h2>
      <div class="container">
        <div class="flex-row">
          <?php foreach($bestProducts as $product): ?>
            <div class="flex-item product-item">
              <div class="card ">
                <div class="card-image">
                  <img src="<?php echo e(URL::asset($product->mainPictureURL)); ?>">
                  <span class="card-title <?php echo e(isset($demoColors['thirdFontColorClass']) ? $demoColors['thirdFontColorClass'] : ''); ?>"><?php echo e($product->name); ?></span>
                </div>
             <!--    <div class="card-content">
           </div> -->
               <div class="card-action ">
                <a class="<?php echo e(isset($demoColors['secondFontColorClass']) ? $demoColors['secondFontColorClass'] : ''); ?>" href="#"><?php echo e(trans('core::main.section3DetailMessage')); ?></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>      
    </section>
  <?php endif; ?>

  <!-- Section 4 section -->
  <section class="section center  <?php echo e(isset($demoColors['mainColorClass']) ? $demoColors['mainColorClass'] : ''); ?> <?php echo e(isset($demoColors['mainFontColorClass']) ? $demoColors['mainFontColorClass'] : ''); ?>  ">
    <h2 class="<?php echo e(isset($demoColors['sectionTitleFontColor']) ? $demoColors['sectionTitleFontColor'] : ''); ?>"><?php echo e(trans('core::main.section4Message1')); ?></h2>
    <a class="waves-effect waves-light <?php echo e(isset($demoColors['secondColorClass']) ? $demoColors['secondColorClass'] : ''); ?> <?php echo e(isset($demoColors['buttonColorText']) ? $demoColors['buttonColorText'] : ''); ?>  btn-large" href="contact"><i class="fa fa-envelope-o"></i> <?php echo e(trans('core::main.section4ButtonMessage')); ?></a>
  </section>

  <!-- Section 5 - Our clients section -->
  <?php if(!is_null($clients) and count($clients) > 0): ?>
  <section class="section">
    <h2 class="center <?php echo e(isset($demoColors['mainFontColorClass']) ? $demoColors['mainFontColorClass'] : ''); ?>"><?php echo e(trans('core::main.section5Message1')); ?></h2>
    <div class="container">
      <div class="owl-carousel" id="owl-clients">
          <?php foreach($clients as $client): ?>
            <div class="item"> 
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?php echo e(URL::asset($client->mainPictureURL)); ?>">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo e($client->name); ?><i class="material-icons right">more_vert</i></span>
                      
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"><?php echo e($client->name); ?><i class="material-icons right">close</i></span>
                      <p><?php echo e($client->description); ?></p>
                    </div>
                  </div>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <div class="divider"></div>

  <!-- Section 6 - Social media -->
  <section class="section">
      <h2 class="center <?php echo e(isset($demoColors['mainFontColorClass']) ? $demoColors['mainFontColorClass'] : ''); ?>"><?php echo e(trans('core::main.section6Message1')); ?></h2>
      <div class="container">
        <div class="flex-row <?php echo e(isset($demoColors['thirdFontColorClass']) ? $demoColors['thirdFontColorClass'] : ''); ?> ">
            <?php if(!is_null($companyInfo) and isset($companyInfo->mainFacebookProfile)): ?>
            <div class="flex-col center"><a  target="_blank" href="<?php echo e($companyInfo->mainFacebookProfile); ?>"><i class="fa fa-facebook-square fa-5x"></i> Facebook</a></i></div>
            <?php endif; ?>
            <?php if(!is_null($companyInfo) and isset($companyInfo->mainTwitterProfile)): ?>
            <div class="flex-col center"><a  target="_blank" href="<?php echo e($companyInfo->mainTwitterProfile); ?>"><i class="fa fa-twitter-square fa-5x"></i> Twitter</a></div>
            <?php endif; ?>
            <?php if(!is_null($companyInfo) and isset($companyInfo->mainInstagramProfile)): ?>
            <div class="flex-col center"><a  target="_blank" href="<?php echo e($companyInfo->mainInstagramProfile); ?>"><i class="fa fa-instagram fa-5x"></i> Instagram</a></div>
            <?php endif; ?>
            <?php if(!is_null($companyInfo) and isset($companyInfo->mainGooglePlusProfile)): ?>
            <div class="flex-col center"><a  target="_blank" href="<?php echo e($companyInfo->mainGooglePlusProfile); ?>"><i class="fa fa-google-plus-official fa-5x"></i> Google +</a></div>
            <?php endif; ?>
            <?php if(!is_null($companyInfo) and isset($companyInfo->mainLinkedInProfile)): ?>
            <div class="flex-col center"><a  target="_blank" href="<?php echo e($companyInfo->mainLinkedInProfile); ?>"><i class="fa fa-linkedin-square fa-5x"></i> LinkedIn</a></div>
            <?php endif; ?>
        </div>
      </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/js/owlCarousel/owl.carousel.css')); ?>">
    <script src="<?php echo e(URL::asset('assets/js/owlCarousel/owl.carousel.min.js')); ?>"></script>
    <script>
      var homeAPI = (function($){
        var initClientsCarousel = function(){
          $("#owl-clients").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3]

          });
        }

        var init = function(){
          initClientsCarousel();
        }

        return {
          init: init
        }

      }(jQuery));

      $(document).ready(function() {
        homeAPI.init();
      });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::EJCTemplate.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>