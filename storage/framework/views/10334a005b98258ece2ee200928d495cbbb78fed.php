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

    <script src="<?php echo e(URL::asset('installer/js/babel.min.js')); ?>"></script>
    <script type="text/babel" src="<?php echo e(URL::asset('installer/js/installer.js')); ?>"></script>



  </head>
  <body>
   <!--  <div class="master">
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
    </div> -->

     <div class="master">
      <div class="col s6">
        <div class="box">
          <div class="header">
              <h1 class="header__title"><?php echo $__env->yieldContent('title'); ?></h1>
          </div>
          <div id="installerFormWizard" class="formWizard">
            
              <ul class="step">
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon database"></i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon  fa-building"></i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon permissions"></i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon requirements"></i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon update"></i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon welcome"></i></li>
                <li class="step__divider"></li>
              </ul>
              <div id="main" class="main stepsContainer">
                    

              </div>

          </div>
        </div>
      </div>  
    </div>
    <div id="productModal" class="modal">
      <div class="modal-content">
        <h4><?php echo e(trans('messages.product.addProduct')); ?></h4>


        <div data-id="${this.id}" class="${ProductComp.viewClassName} card-panel grey lighten-5  ">
            <div class="row">
                <div class="col s8">
                    <div class="row">
                      <div class="col s12">
                         <div class="input-field">

                            <input placeholder="max 100 caracteres"  type="text" value="${this.name}" class="validate" id="nombre">
                            <label for="nombre" ><?php echo e(trans('messages.product.productName')); ?></label>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12">
                        <div class="input-field">
                          <textarea id="descripcion"
                            values="${this.description}" class="materialize-textarea">
                          </textarea>
                                 <label for="descripcion" ><?php echo e(trans('messages.product.productDescription')); ?></label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                         <div class="input-field col s6">
                            <input placeholder="max 100 caracteres"  type="text" value="${this.price}" class="validate" id="precio">
                              <label for="precio" >Precio</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="max 100 caracteres" value="${this.currencyAbbr}" type="text" class="validate" id="moneda">
                                  <label for="moneda"><?php echo e(trans('messages.product.currency')); ?></label>
                        </div>

                    </div>
                </div>
                <div class="col s4">
                  <div class="image_view_loader_container">
                        <img class="img_view grey lighten-2" src="" alt="" />
                      <div class="file-field input-field">
                          <div class="btn">
                            <span><?php echo e(trans('messages.product.loadImage')); ?></span>
                            <input class="image_view_input_file" type="file">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                          </div>
                       </div>
                  </div>

                </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>

    <div id="testP">
    </div>

  </body>




  <script type="text/babel">
   
      let Steps = [
      {

        props: {
            id: "#step1",
            title: "<?php echo e(trans('messages.welcome.title')); ?>",
            iconClass: ".welcome",
            isInitialStep: true,
            isFinalStep: false,
            template: ` <p class="paragraph"><?php echo e(trans('messages.welcome.message')); ?></p>
              <div class="buttons">
                  <a class="button nextStep"><?php echo e(trans('messages.next')); ?></a>
              </div>`
        },
        beforeNextStep(container){
    
        }

      },
      {

        props: {
            id: "#step2",
            title: "<?php echo e(trans('messages.environment.title')); ?>",
            iconClass: ".update",
            isInitialStep: true,
            isFinalStep: false,
            template: `
               <?php if(session('message')): ?>
                  <p class="alert"><?php echo e(session('message')); ?></p>
                  <?php endif; ?>
                  <form method="post" action="<?php echo e(route('EJCInstaller::environmentSave')); ?>">
                      <textarea class="textarea" name="envConfig"><?php echo e($envConfig); ?></textarea>
                      <?php echo csrf_field(); ?>

                      <div class="buttons buttons--right">
                           <button class="button button--light" type="submit"><?php echo e(trans('messages.environment.save')); ?></button>
                      </div>
                  </form>
                  <?php if(!isset($environment['errors'])): ?>
                  <div class="buttons">
                      <a class="button nextStep" href="#">
                          <?php echo e(trans('messages.next')); ?>

                      </a>
                  </div>
                  <?php endif; ?>
            `,
        },
        beforeNextStep(container){

        }

      },
      {

        props: {
            id: "#step3",
            title: "<?php echo e(trans('messages.requirements.title')); ?>",
            iconClass: ".requirements",
            isInitialStep: false,
            isFinalStep: false,
            template: `
               
                <ul class="list">
                    <?php foreach($requirements['requirements'] as $extention => $enabled): ?>
                    <li class="list__item <?php if($enabled): ?> success <?php else: ?> error <?php endif; ?>"><?php echo e($extention); ?></li>
                    <?php endforeach; ?>
                </ul>

                <?php if(!isset($requirements['errors'])): ?>
                    <div class="buttons">
                        <a class="button nextStep" href="#">
                        <?php echo e(trans('messages.next')); ?>

                        </a>
                    </div>
                <?php endif; ?>
            `,
        },
        beforeNextStep(container){

        }

      },
       {

        props: {
            id: "#step4",
            title: "<?php echo e(trans('messages.permissions.title')); ?>",
            iconClass: ".permissions",
            isInitialStep: false,
            isFinalStep: false,
            template: `

                <ul class="list">
                    <?php foreach($permissions['permissions'] as $permission): ?>
                    <li class="list__item list__item--permissions <?php if($permission['isSet']): ?> success <?php else: ?> error <?php endif; ?>">
                        <?php echo e($permission['folder']); ?><span><?php echo e($permission['permission']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <?php if(!isset($permissions['errors'])): ?>
                <div class="buttons">
                    <a class="button nextStep">
                        <?php echo e(trans('messages.next')); ?>

                    </a>
                </div>
                <?php endif; ?>
            `,
        },
        beforeNextStep(container){

        }

      },
      {

        props: {
            id: "#step5",
            title: "<?php echo e(trans('messages.requirements.title')); ?>",
            iconClass: ".fa-building",
            isInitialStep: false,
            isFinalStep: false,
            template: `
               
                <ul class="list">
                    <?php foreach($requirements['requirements'] as $extention => $enabled): ?>
                    <li class="list__item <?php if($enabled): ?> success <?php else: ?> error <?php endif; ?>"><?php echo e($extention); ?></li>
                    <?php endforeach; ?>
                </ul>

                <?php if(!isset($requirements['errors'])): ?>
                    <div class="buttons">
                        <a class="button nextStep" href="#">
                        <?php echo e(trans('messages.next')); ?>

                        </a>
                    </div>
                <?php endif; ?>
            `,
        },
        beforeNextStep(container){

        }

      },
       {

        props: {
            id: "#step6",
            title: "<?php echo e(trans('messages.company.title')); ?>",
            iconClass: ".database",
            isInitialStep: false,
            isFinalStep: true,
            template: `
           
                <p class="paragraph"><?php echo e(trans('messages.company.message')); ?></p>
                      <div class="input-field"> 
                          <div class="form-group">
                              <span class="help-block"></span>
                              <input type="text" class="form-control" id="name" name="name" >
                              <label class="control-label" for="name"><?php echo e(trans('messages.company.name')); ?></label>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="description" class="materialize-textarea" name="description" style="max-height: 200px; resize: none" maxlength="450"></textarea>
                                  <label for="description"><?php echo e(trans('messages.company.description')); ?></label>
                              </div>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="missionStatement" class="materialize-textarea" name="missionStatement" style="max-height: 200px; resize: none" ></textarea>
                                  <label for="missionStatement"><?php echo e(trans('messages.company.missionStatement')); ?></label>
                              </div>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="visionStatement" class="materialize-textarea" name="visionStatement" style="max-height: 200px; resize: none"></textarea>
                                  <label for="visionStatement"><?php echo e(trans('messages.company.visionStatement')); ?></label>
                              </div>
                          </div>
                      </div>
                      <div class="input-field "> 

                          <label for="input-file-now">Logo</label>
                          <div class="form-group">
                              <input type="file" name="logo" id="input-file-now" data-allowed-file-extensions="jpg png" accept=".jpg,.png" class="dropify form-control" />
                          </div>
                      </div>
                              <br />

                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <!-- <div class="form-group"> -->
                                  <i class="fa fa-phone prefix"></i>
                                  <input type="text" class="form-control" name="mainLandPhone" id="mainLandPhone" >
                                  <label class="control-label" for="mainLandPhone"><?php echo e(trans('messages.company.mainLandPhone')); ?></label>
                              <!-- </div> -->
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-envelope prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainEmail" id="mainEmail" >
                                  <label class="control-label" for="mainEmail"><?php echo e(trans('messages.company.mainEmail')); ?></label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-facebook prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainFacebookProfile" id="mainFacebookProfile" >
                                  <label class="control-label" for="mainFacebookProfile"><?php echo e(trans('messages.company.mainFacebookProfile')); ?></label>
                              </div>
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-twitter prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainTwitterProfile" id="mainTwitterProfile" >
                                  <label class="control-label" for="mainTwitterProfile"><?php echo e(trans('messages.company.mainTwitterProfile')); ?></label>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-instagram prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainInstagramProfile" id="mainInstagramProfile" >
                                  <label class="control-label" for="mainInstagramProfile"><?php echo e(trans('messages.company.mainInstagramProfile')); ?></label>
                              </div>
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-google-plus-official prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainGooglePlusProfile" id="mainGooglePlusProfile" >
                                  <label class="control-label" for="mainGooglePlusProfile"><?php echo e(trans('messages.company.mainGooglePlusProfile')); ?></label>
                              </div>
                          </div>
                      </div>
                      
                      <div class="buttons">
                          <button class="button nextStep">
                          <?php echo e(trans('messages.next')); ?></button>
                      </div>
            `,
        },
        beforeNextStep(container){
              
        }

      },


      ];

      
      let installerFormWizard =  $("#installerFormWizard");
      var installerForm = new FormWizard(Steps, "register.php", installerFormWizard )
      installerForm.render();


  </script>
  
  <style>

     .image_view_loader_container .img_view{
        width:  100%;
        height: 230px;
        min-width: 100%;
     }
  </style>

  <script type="text/babel">
        let products = [ 
            {name: "Producto 1", description: "Descripción 1", price: 300, currencyAbbr: "$", mainPictureURL: "..img/ruta/ruta", rank: 5},

            {name: "Producto 2", description: "Descripción 2", price: 300, currencyAbbr: "$", mainPictureURL: "..img/ruta/ruta", rank: 5},

            {name: "Producto 3", description: "Descripción 3", price: 300, currencyAbbr: "$", mainPictureURL: "..img/ruta/ruta", rank: 5},

            {name: "Producto 4", description: "Descripción 4", price: 300, currencyAbbr: "$", mainPictureURL: "..img/ruta/ruta", rank: 5},

            {name: "Producto 5", description: "Descripción 5", price: 300, currencyAbbr: "$", mainPictureURL: "..img/ruta/ruta", rank: 5},
        ];

        let container =  $("#testP");
        let Padmin =  new ProductsAdmin(container, products);
        Padmin.render();
        ProductsAdmin.initEvents(Padmin);

  </script>
</html>