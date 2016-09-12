<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('messages.title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-96x96.png') }}" sizes="96x96"/>
    <link href="{{ asset('installer/css/style.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/materialize.min.css') }}" rel="stylesheet"/>
    <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="{{URL::asset('assets/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="{{URL::asset('assets/jqueryBarRating/themes/css-stars.css')}}">
    
    <script src="{{URL::asset('assets/js/jquery-3.1.0.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/materialize.js')}}"></script>
    <script src="{{URL::asset('assets/dropify/js/dropify.min.js')}}"></script>

    <script src="{{URL::asset('installer/js/babel.min.js')}}"></script>
    <script>
        var Resourses = (function(){
            var addLogoDefaultImg = "{{URL::asset('installer/img/addLogo.png')}}";
            var imgDefaultBack = "{{URL::asset('installer/img/imgDefaultBack.png')}}";
            var setLoadingScreen = function () {
               $('.box').append('<div class="overlay"><i class="fa fa-refresh fa-spin white-text"></i> <p class="white-text">{{trans('messages.loading')}}</p></div>');
            };
            var hideLoadingScreen = function () {
               $('.box').find('.overlay').remove();
            } 
            return {
                addLogoDefaultImg: addLogoDefaultImg,
                imgDefaultBack: imgDefaultBack,
                setLoadingScreen: setLoadingScreen,
                hideLoadingScreen: hideLoadingScreen
            }

        }())
    </script>
    <script type="text/babel" src="{{URL::asset('installer/js/installer.js')}}"></script>
    <script src="{{URL::asset('assets/jqueryBarRating/jquery.barrating.min.js')}}"></script>

  </head>
  <body>

     <div class="master">
      <div class="container">
        <div class="box">
          <div class="header">
              <h1 class="header__title">@yield('title')</h1>
          </div>
          <div id="installerFormWizard" class="formWizard">
            
              <ul class="step">
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon done_all material-icons">done_all</i></li>
                <li class="step__divider"></li>
                 <li class="step__item "><i class="step__icon  client material-icons">contacts</i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon  products material-icons">shopping_basket</i></li>
                <li class="step__divider"></li>
                <li class="step__item "><i class="step__icon business material-icons">business</i></li>
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
    <div id="productModal" class="modal" dismissible="false">
      <div class="modal-content">
        <h4>{{ trans('messages.product.addProduct') }}</h4>
        <div class="card-panel grey lighten-5">
            <div class="row">
                <div class="col s8">
                    <div class="row">
                      <div class="col s12">
                         <div class="input-field">

                            <input  type="text" value="" class="validate name" id="name">
                            <label for="name" >{{trans('messages.product.productName') }}</label>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12">
                        <div class="input-field">
                          <textarea id="description"
                             class="materialize-textarea description" maxlength="500"></textarea>
                                 <label for="description" >{{ trans('messages.product.productDescription') }}</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                         <div class="input-field col s6">
                            <input   type="number" value="" class="validate price" id="price">
                              <label for="price" >{{trans('messages.product.productPrice') }}</label>
                        </div>
                        <div class="input-field col s6">
                            <input  value="" type="text" class="validate currency" id="currency">
                                  <label for="currency">{{ trans('messages.product.productCurrency') }}</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col s6">
                          <label for="newProductRating" >{{trans('messages.product.productRating') }}</label>
                                <select  name="newProductRating" class="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                  <div class="image_view_loader_container">
                        <img style="background-image: url('{{URL::asset('installer/img/imgDefaultBack.png')}}')" class="img_view " src="" alt="" />
                      <div class="file-field input-field">
                          <div class="btn">
                            <span>{{ trans('messages.product.loadImage') }}</span>
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

        <a href="#!" class="cancelBtn modal-action modal-close waves-effect waves-green btn-flat">{{ trans('messages.product.cancel') }}</a>
        <a href="#!"  class="saveProductBtn modal-action  waves-effect waves-green btn-flat">{{ trans('messages.product.save') }}</a>
      </div>
    </div>

  </body>




  <script type="text/babel">
      let resources = Resourses;
      let Steps = [

      {

        props: {
            id: "#step1",
            title: "{{ trans('messages.welcome.title') }}",
            iconClass: ".welcome",
            isInitialStep: true,
            isFinalStep: false,
            template: ` <p class="paragraph">{{ trans('messages.welcome.message') }}</p>
              <div class="buttons">
                  <a class="button nextStep">{{ trans('messages.next') }}</a>
              </div>`
        },
        beforeNextStep(container){
           return  new Promise(function(resolve, reject){
              resolve();
           }); 
        }

      },
       
      {

        props: {
            id: "#step2",
            title: "{{ trans('messages.environment.title') }}",
            iconClass: ".update",
            isInitialStep: true,
            isFinalStep: false,
            template: `
               @if (session('message'))
                  <p class="alert">{{ session('message') }}</p>
                  @endif
                   <p >{{ trans('messages.environment.description')}}</p>
                  <form method="post" action="{{ route('EJCInstaller::environmentSave') }}">
                      <textarea class="textarea" id="envConfig" name="envConfig">{{ $envConfig }}</textarea>
                      {!! csrf_field() !!}
                      <br>
                  </form>
                  @if(!isset($environment['errors']))
                  <div class="buttons">
                      <a class="button nextStep" href="#">
                          {{ trans('messages.next') }}
                      </a>
                  </div>
                  @endif
            `,
        },
        beforeNextStep(container){
            return  new Promise(function(resolve, reject){
                var newConf = $('#envConfig').val();
                $.ajax({
                    url:'install/environment/save',
                    method:'POST',
                    beforeSend : function(){
                     resources.setLoadingScreen();
                    },
                    data : {'envConfig': newConf},
                    success : function(response){
                        if(response.status && response.status === 'success'){
                          resources.hideLoadingScreen();
                          resolve();
                        } else {
                          console.log(response.message);
                          reject();
                        }
                    }
                })
               
           }); 
        }

      },
      {

        props: {
            id: "#step3",
            title: "{{ trans('messages.requirements.title') }}",
            iconClass: ".requirements",
            isInitialStep: false,
            isFinalStep: false,
            template: `
               
                <ul class="list">
                    @foreach($requirements['requirements'] as $extention => $result)
                    <li class="list__item @if($result['result']) success @else error @endif">{{ $extention }} @if(isset($result['error'])) ( {{$result['error']}} )@endif</li>
                    @endforeach
                </ul>

                @if(!isset($requirements['errors']))
                    <div class="buttons">
                        <a class="button nextStep" href="#">
                        {{ trans('messages.next') }}
                        </a>
                    </div>
                @endif
            `,
        },
        beforeNextStep(container){

           return  new Promise(function(resolve, reject){
                  
                $.ajax({
                    url:'install/database',
                    method:'GET',
                    beforeSend : function(){
                     resources.setLoadingScreen();
                    },
                    success : function(response){
                        if(response.status && response.status === 'success'){
                          resources.hideLoadingScreen();
                          resolve();
                        } else {
                          console.log(response.message);
                          reject();
                        }
                    }
                })
           }); 
        }

      },
       {

        props: {
            id: "#step4",
            title: "{{ trans('messages.permissions.title') }}",
            iconClass: ".permissions",
            isInitialStep: false,
            isFinalStep: false,
            template: `

                <ul class="list">
                    @foreach($permissions['permissions'] as $permission)
                    <li class="list__item list__item--permissions @if($permission['isSet']) success @else error @endif">
                        {{ $permission['folder'] }}<span>{{ $permission['permission'] }}</span>
                        </li>
                    @endforeach
                </ul>

                @if(!isset($permissions['errors']))
                <div class="buttons">
                    <a class="button nextStep">
                        {{ trans('messages.next') }}
                    </a>
                </div>
                @endif
            `,
        },
        beforeNextStep(container){
            return  new Promise(function(resolve, reject){
              resolve();
           }); 
        }

      },
      {

        props: {
            id: "#step5",
            title: "{{ trans('messages.company.title') }}",
            iconClass: ".business",
            isInitialStep: false,
            isFinalStep: false,
            template: `
                <p class="paragraph">{{ trans('messages.company.message') }}</p>
                      <div class="input-field"> 
                          <div class="form-group">
                              <span class="help-block"></span>
                              <input type="text" class="form-control companyName" id="name" name="name" >
                              <label class="control-label" for="name">{{ trans('messages.company.name') }}</label>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="description" class="materialize-textarea" name="description" style="max-height: 200px; resize: none" maxlength="450"></textarea>
                                  <label for="description">{{ trans('messages.company.description') }}</label>
                              </div>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="missionStatement" class="materialize-textarea" name="missionStatement" style="max-height: 200px; resize: none" ></textarea>
                                  <label for="missionStatement">{{ trans('messages.company.missionStatement') }}</label>
                              </div>
                          </div>
                      </div>
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="visionStatement" class="materialize-textarea" name="visionStatement" style="max-height: 200px; resize: none"></textarea>
                                  <label for="visionStatement">{{ trans('messages.company.visionStatement') }}</label>
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
                      <div class="input-field "> 
                          <div class="form-group">
                              <div class="input-field">
                                  <textarea id="mainAddress" class="materialize-textarea" name="mainAddress" style="max-height: 200px; resize: none"></textarea>
                                  <label for="mainAddress">{{ trans('messages.company.mainAddress') }}</label>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <!-- <div class="form-group"> -->
                                  <i class="fa fa-phone prefix"></i>
                                  <input type="text" class="form-control" name="mainLandPhone" id="mainLandPhone" >
                                  <label class="control-label" for="mainLandPhone">{{ trans('messages.company.mainLandPhone') }}</label>
                              <!-- </div> -->
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-envelope prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainEmail" id="mainEmail" >
                                  <label class="control-label" for="mainEmail">{{ trans('messages.company.mainEmail') }}</label>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-facebook prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainFacebookProfile" id="mainFacebookProfile" >
                                  <label class="control-label" for="mainFacebookProfile">{{ trans('messages.company.mainFacebookProfile') }}</label>
                              </div>
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-twitter prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainTwitterProfile" id="mainTwitterProfile" >
                                  <label class="control-label" for="mainTwitterProfile">{{ trans('messages.company.mainTwitterProfile') }}</label>
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-instagram prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainInstagramProfile" id="mainInstagramProfile" >
                                  <label class="control-label" for="mainInstagramProfile">{{ trans('messages.company.mainInstagramProfile') }}</label>
                              </div>
                          </div>
                          <div class="input-field col m6 s12"> 
                              <div class="form-group">
                                  <i class="fa fa-google-plus-official prefix"></i>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" name="mainGooglePlusProfile" id="mainGooglePlusProfile" >
                                  <label class="control-label" for="mainGooglePlusProfile">{{ trans('messages.company.mainGooglePlusProfile') }}</label>
                              </div>
                          </div>
                      </div>
                      
                      <div class="buttons">
                          <button class="button nextStep">
                          {{trans('messages.next') }}</button>
                      </div>
            `,
        },
        beforeNextStep(container){
           return  new Promise(function(resolve, reject){
                  var formData = new FormData($("form")[0]);
                  var name = $(".companyName").val();

                  if(name.trim() === ""){
                      reject();
                  }

                  $.ajax({
                        url:'install/company/save',
                        method:'POST',
                        data: formData,
                        processData : false,
                        contentType : false,  
                        beforeSend : function(){
                         resources.setLoadingScreen();
                        },
                        success : function(response){
                            if(response.status && response.status === 'success'){
                              resources.hideLoadingScreen();
                              resolve();
                            } else {
                              console.log(response.message);
                              reject();
                            }
                        }
                  }) 
           }); 
        },
        afterRender(container) {
          $('.dropify').dropify({
              messages: {
                  'default': '<p class="center-align">{{trans("messages.company.dropLogoMessage")}}</p>',
                  'replace': '{{trans("messages.company.replaceLogoMessage")}}',
                  'remove':  '{{trans("messages.company.removeLogoMessage")}}',
                  'error':   '{{trans("messages.company.errorUploadLogo")}}'
              }
          });
         


        }
      },
      {

        props: {
            id: "#step6",
            title: "{{ trans('messages.product.title') }}",
            iconClass: ".products",
            isInitialStep: false,
            isFinalStep: false,
            options: {},
            template: `
           
              <div id="productsContainer">
              </div>
              <div class="buttons">
                  <button class="button nextStep">
                  {{trans('messages.next') }}</button>
              </div>
            `,
        },
        beforeNextStep(container){

          var products = this.props.options.padmin.getProducts();
  
          return  new Promise(function(resolve, reject){
              if(products.length === 0){
                  reject();
                  return; 
              }else{
                products =  JSON.stringify(products);
              }

              $.ajax({
                        url:'install/products/save',
                        method:'POST',
                        data: products,
                        processData: false,
                        contentType : false,  
                        beforeSend : function(){
                         resources.setLoadingScreen();
                        },
                        success : function(response){
                            if(response.status && response.status === 'success'){
                            resources.hideLoadingScreen();
                              resolve();
                            } else {
                              console.log(response.message);
                              reject();
                            }
                        }
               }) 
          }); 
            
        },
        afterRender(container) {
           this.props.options["padmin"] = new ProductsAdmin($("#productsContainer"), [], $('#productModal'), $('#inputProducts') )
            this.props.options.padmin.render();
            ProductsAdmin.initEvents(this.props.options.padmin);
        }
        
      },
         {

        props: {
            id: "#step7",
            title: "{{ trans('messages.client.title') }}",
            iconClass: ".client",
            isInitialStep: false,
            isFinalStep: false,
            options: {},
            template: `
           
              <div id="clientsContainer">
              </div>
              <div class="buttons">
                  <button class="button nextStep">
                  {{trans('messages.next') }}</button>
              </div>
            `,
        },
        beforeNextStep(container){

          var clients = this.props.options.cAdmin.getClients(true);
         
          return  new Promise(function(resolve, reject){
             
              $.ajax({
                        url:'install/clients/save',
                        method:'POST',
                        data: clients,
                        processData: false,
                        contentType : false,
                        beforeSend: function(){
                          resources.setLoadingScreen();
                        },
                        success : function(response){
                            if(response.status && response.status === 'success'){
                              resources.hideLoadingScreen();
                              resolve();
                            } else {
                              console.log(response.message);
                              reject();
                            }
                        }
               }) 
          }); 
            
        },
        afterRender(container) {
            let trans = {
              clientPlaceHolder: "{{ trans('messages.client.clientName') }}",
              clientImgTitle:"{{ trans('messages.client.clientImgTitle') }}"
            }
            this.props.options["cAdmin"] =   new ClientsAdmin( [], $("#clientsContainer"), trans);
            this.props.options.cAdmin.render();
        
            ClientsAdmin.initEvents(this.props.options.cAdmin);
        }
        
      },
      {

        props: {
            id: "#step8",
            title: "{{ trans('messages.final.title')}}",
            iconClass: ".done_all",
            isInitialStep: false,
            isFinalStep: true,
            template: `
           
              <p class="paragraph">{{ session('message')['message'] }}</p>
              <div class="buttons">
                  <a href="{{ route('CoreRoutes::landing_page') }}" class="button">{{ trans('messages.final.initApp') }}</a>
              </div>
            `,
        },
        beforeNextStep(container){
            return  new Promise(function(resolve, reject){
              resolve();
           });    
        },
        afterRender(container) {

          return  new Promise(function(resolve, reject){
             
              $.ajax({
                        url:'install/final',
                        method:'GET',
                        processData: false,
                        contentType : false,
                        beforeSend: function(){
                          resources.setLoadingScreen();
                        },
                        success : function(response){
                            if(response.status && response.status === 'success'){
                              resources.hideLoadingScreen();
                              resolve();
                            } else {
                              console.log(response.message);
                              reject();
                            }
                        }
               }) 
       
          }); 

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
 

  </script>
</html>