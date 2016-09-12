<?php $__env->startSection('content'); ?>

  <div class="container center-align">
    <h1 class="center-align"><?php echo e(trans('core::main.contactUs')); ?></h1>
        <div class="row">
            <div class="col m10 offset-m1 s12">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name"><?php echo e(trans('core::main.firstName')); ?></label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name"><?php echo e(trans('core::main.lastName')); ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <!-- <i class="mdi-content-mail prefix"></i> -->
                                <input id="email" type="email" class="validate" required>
                                <label for="email"><?php echo e(trans('core::main.email')); ?></label>
                            </div>
                            <div class="input-field col m6 s12">
                                <!-- <i class="mdi-maps-store-mall-directory prefix"></i> -->
                                <input id="company" type="text" class="validate">
                                <label for="company"><?php echo e(trans('core::main.company')); ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <textarea id="message" class="materialize-textarea"></textarea>
                              <label for="message"><?php echo e(trans('core::main.message')); ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <label><?php echo e(trans('core::main.howDidYouFindUs')); ?></label>
                              <br/>
                            </div>
                            <div class="input-field col m3 s6 center-align">
                              <input name="group1" type="radio" id="google" />
                              <label for="google">Google</label>
                            </div>
                            <div class="input-field col m3 s6 center-align">
                              <input name="group1" type="radio" id="customer" />
                              <label for="customer"><?php echo e(trans('core::main.costumer')); ?></label>
                            </div>
                            <div class="input-field col m3 s6 center-align">
                              <input name="group1" type="radio" id="store" />
                              <label for="store"><?php echo e(trans('core::main.store')); ?></label>
                            </div>
                            <div class="input-field col m3 s6 center-align">
                              <input name="group1" type="radio" id="other" />
                              <label for="other"><?php echo e(trans('core::main.other')); ?></label>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="input-field col s12">
                              <label><?php echo e(trans('core::main.communicationPreference')); ?></label>
                              <br/>
                            </div>
                            <div class="input-field col m4 s12 center-align">
                              <input name="group2" type="checkbox" id="emailComm" />
                              <label for="emailComm">Email</label>
                            </div>
                            <div class="input-field col m4 s12 center-align">
                              <input name="group2" type="checkbox" id="callComm" />
                              <label for="callComm"><?php echo e(trans('core::main.callMe')); ?></label>
                            </div>
                            <div class="input-field col m4 s12 center-align">
                              <input name="group2" type="checkbox" id="newsletter" />
                              <label for="newsletter"><?php echo e(trans('core::main.newsletter')); ?></label>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col m12">
                             <p class="right-align"><button class="btn btn-large waves-effect waves-light <?php echo e(isset($demoColors['secondColorClass']) ? $demoColors['secondColorClass'] : ''); ?> <?php echo e(isset($demoColors['buttonColorText']) ? $demoColors['buttonColorText'] : ''); ?>" type="button" name="action"><?php echo e(trans('core::main.sendMessage')); ?></button></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
    <div class="container">

      <!-- Contact Information -->
    
      <h3><?php echo e(trans('core::main.contactInfo')); ?></h3>
      <section>
        <div id="ubication">
          <strong><?php echo e(trans('core::main.ubication')); ?>:</strong>
          <span>
            <?php echo e(isset($companyInfo->mainAddress) ? $companyInfo->mainAddress : 'Address'); ?>

          </span>
        </div>

        <div id="phones">
          <strong><?php echo e(trans('core::main.phones')); ?>:</strong>
          <span>
            <?php echo e(isset($companyInfo->mainLandPhone) ? $companyInfo->mainLandPhone : '-'); ?>

          </span>
        </div>

        <div id="email">
          <strong><?php echo e(trans('core::main.email')); ?>:</strong>
          <span>
            <?php echo e(isset($companyInfo->mainEmail) ? $companyInfo->mainEmail : '-'); ?>

          </span>
        </div>
      </section>
    
      </br>
      <div class="divider"></div>
      <!-- Map -->
      <section>
        <h5><?php echo e(trans('core::main.locateUsOnMap')); ?></h5>
        <div  id="map" style="height:400px; width:100%"></div>
      </section>

    </div>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOYTtlwWKBiwfrzrkS31jQga1CZrSNwFY&callback=initMap"
        async defer></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::EJCTemplate.layouts.full-width', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>