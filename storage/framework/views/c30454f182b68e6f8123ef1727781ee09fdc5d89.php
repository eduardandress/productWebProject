<?php $__env->startSection('sidebar-content'); ?>
    <?php echo $__env->make('core::EJCTemplate.includes.productmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>  

<?php $__env->startSection('content'); ?>


   <!--=====================================
   =              Section 1                =
   ======================================-->

    <div class="section">
        <h4 class="center-align"><?php echo e(trans('core::main.products')); ?></h4>
        <p class="center-align"><?php echo e(trans('core::main.ourProducts')); ?></p>
       
        <div class="container-fluid">
            <div class="flex-row">
                 <?php foreach($allProducts as $product): ?>
                    <div  class="flex-item product-item">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img"  src="<?php echo e(URL::asset($product->mainPictureURL)); ?>">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4 truncate"><?php echo e($product->name); ?><i class="material-icons right">more_vert</i>
                            </span>

                            <div class="left-align">
                                <?php if($product->price > 0): ?> 
                                    <h5><?php echo e($product->price); ?> <?php echo e($product->currencyAbbr); ?></h5>
                                <?php endif; ?>  
                                <span class="stars">
                                      <select  name="rating" class="rating">
                                              <option   <?php if($product->rank == 1): ?>  selected="selected"  <?php endif; ?> value="1" >1</option>
                                              <option   <?php if($product->rank == 2): ?>  selected="selected"  <?php endif; ?> value="2">2</option>
                                              <option   <?php if($product->rank == 3): ?>  selected="selected"  <?php endif; ?> value="3">3</option>
                                              <option   <?php if($product->rank == 4): ?>  selected="selected"  <?php endif; ?> value="4">4</option>
                                              <option   <?php if($product->rank == 5): ?>  selected="selected"  <?php endif; ?> value="5">5</option>
                                      </select>
                                </span>
                            </div>
                            <p class="right-align"><a href="#"><?php echo e(trans('core::main.linkSeeProductText')); ?> </a></p>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo e($product->name); ?><i class="material-icons right">close</i></span>
                            <p><?php echo html_entity_decode($product->description); ?></p>
                          </div>
                        </div>
                    </div>
                  <?php endforeach; ?>

            </div>
        </div>
        
    </div>
   

          
    <!--====  End of Section 1  ====-->
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(URL::asset('assets/jqueryBarRating/jquery.barrating.min.js')); ?>"></script>
  
  <script type="text/javascript">
    (function($){
      $(function(){

          let products  = <?php echo json_encode($allProducts); ?>


          $('.product-item .rating').barrating({
              theme: 'css-stars',
              showSelectedRating: false,
              readonly: true
          });

      }); 
    })(jQuery); 
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::EJCTemplate.layouts.no-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>