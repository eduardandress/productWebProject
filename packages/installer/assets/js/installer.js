
class FormWizard {

	constructor(steps, action, container){
		this.steps = steps.map((e, i) => {
			return new FormStep(e.props);
		})
		this.container = container;
		this.activeStep = 0;
		this.actionUrl = action;
		this.isRendered = false;
	}
	getContainer(){
		return this.container;
	}

	save(){


	}

	findStep(id){
		return this.steps.filter((e, i) => {
			  return e.getId() === id;
		})[0] || null;
	}

	updateStep(){

		let nextStep = this.activeStep + 1;

		this.activeStep = nextStep < this.steps.length
		                  ? nextStep
		                  : this.activeStep;

		this.render();
	}

	render(){

		let activeStep =  this.steps[this.activeStep];
		//Set the icon as Active
		let icon = activeStep.getIconClass();
		//get the stepItem
		let stepItem = $(icon).closest(".step__item")

		this.container.find(".step__item")
					  .removeClass("active");
		stepItem.addClass("active")

		this.container.find(".stepsContainer").html( `
			<form action = ${this.actionUrl}>
				${activeStep.html()}
			</form>
		`);

		if(!this.isRendered){
			this.isRendered = true;
			FormStep.initEvents(this);
		}

	}
}


class FormStep {

	static className = ".stepContainer";
	static nextStepClass = ".nextStep";

    constructor(props){
    	this.isValid = true;
    	this.props = props;
    }
    getId(){
    	return this.props.id;
    }
    getIconClass(){
    	return this.props.iconClass;
    }
    isFinalStep(){
    	return this.props.isFinalStep;
    }
    validate(){

    	// Si no es el primer estado no se valida;
    	if(!this.props.isInitialState){
			this.isValid = true;
    	}

       return this.isValid;
    }

    static initEvents(formWizard){

    	let wizardContainer = formWizard.getContainer();

    	//Selector del boton siguiente del step container
    	let nextStepSelectorBtn =  FormStep.className + " " + FormStep.nextStepClass;


    	wizardContainer.on("click", nextStepSelectorBtn, function(e){
    		e.preventDefault();

    		// Se obtiene la instancia de la clase quien hizo click por si Id.
    		let id = $(this).closest(FormStep.className).attr("data-id");
    		let instance = formWizard.findStep(id);
    		let isValid = instance.validate();

    		if(!isValid){
    			//aparecer un mensaje de Error
    			return;
    		}

			let beforeNextStep = instance.beforeNextStep;
			let fnResult = new Promise(function(resolve, reject){
				resolve();
			});

			if(beforeNextStep){
				fnResult = beforeNextStep();
			}

			fnResult.then(() => {
				// Se verifica si no es el ultimo estado
				if(!instance.isFinalStep()){
					formWizard.updateStep();
				}else{
					//Se guarda/envía la info
					formWizard.save();
				}

			})



    	})

    }

    html(){

    	return `
			<section data-id=${this.props.id} class='stepContainer'>
				<h2> ${this.props.title} </h2>
				${this.props.template}
			</section>
    	`;
    }

}


class ProductComp {

	static viewClassName = "product_container";
	constructor(p){
		this.id = ProductComp.genID();
		this.name =  p.name;
		this.description = p.description;
		this.price = p.price;
		this.currencyAbbr = p.currencyAbbr;
		this.mainPictureURL = p.mainPictureURL;
		this.rank = p.rank;
	}
	static genID(){

	  function s4() {
	    return Math.floor((1 + Math.random()) * 0x10000)
	      .toString(16)
	      .substring(1);
	  }
	  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
	    s4() + '-' + s4() + s4() + s4();

	}
	getId(){
		return this.id;
	}
	getName(){
		return this.name;
	}
	getDescription(){
		return this.description
	}
	getPrice(){
		return this.price;
	}
	getCurrency(){
		return this.currencyAbbr;
	}
	getPictureUrl(){
		return this.mainPictureURL;
	} 
	setPictureUrl(url){
		this.mainPictureURL =  url;
	}
	html(){

		return `
			 <li class="collection-item avatar">
		      <img src="${this.mainPictureURL}" alt="" class="circle">
		      <span class="title">${this.name}</span>
		      <p>${this.description} <br>
		       <span> ${this.price}</span>
		       <span> ${this.currencyAbbr}</span>

		      </p>
		      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
		    </li>
		`

	}
}

class ProductsAdmin {

	static viewClassName = "product_admin_container";

	constructor(container, products, productModalId){
		this.products = products.map( (p, i) => {
			return new ProductComp(p);
		});
		this.container = container;
		this.isRendered = false;
		this.productModal = new ProductModal(productModalId);
	}

	findProduct(id){
		return this.products.filter((p, i) => {
			 return p.getId() === id;
		})[0];
	}
	getContainer(){
		return this.container;
	}
	html(){

		let productsView = this.products.map( (p, i) => {
			return p.html();
		});

		return `
			 <div class="row">
					<div class="col s6 offset-s8">
							<a class="btnAddProduct btn-floating btn-large red" href="#productModal">
					            <i class="material-icons">mode_add</i>
					        </a>
					</div>
			 </div>
			 <ul class="${ProductsAdmin.viewClassName} collection">
					${productsView.join("")}
			 </ul>
		`
/*
			<div class="${ProductsAdmin.viewClassName} container">
				<div class="row">
					<div class="col s6 offset-s8">
							<a class="btn-floating btn-large red">
					            <i class="material-icons">mode_add</i>
					        </a>
					</div>
				</div>
				${productsView.join("")}
			</div>*/
	}
	static initEvents(productAdminInstance){
		// Input Change Event.
		let container = productAdminInstance.getContainer();

		container.on("change", "." + ProductsAdmin.viewClassName + " .image_view_input_file", function(e){

			//Read the input content.
			var tgt = e.target || window.event.srcElement,
       		files = tgt.files;
       		var input = $(this);
			var fr = new FileReader();

	        fr.onload = function () {
	            let url = fr.result;
	            //Changing the img url...
	           	//get the image tag
				var imageTag = input.closest(".image_view_loader_container")
									  .find(".img_view");
				//set the url to the img
				imageTag.attr("src",  url);
				//Let's update the product img url...
				//get the product class name view
				var productContainerClass = "."+ProductComp.viewClassName;
				//get the product container
				var productContainer =  input.closest(productContainerClass);
				var productId =  productContainer.attr("data-id");
				//let's look for the productComp instance
				var product = productAdminInstance.findProduct(productId);
	            //let's update the url name;
	            product.setPictureUrl(url);

	        }
	        fr.readAsDataURL(files[0]);

		})

		

		container.on("click", ".btnAddProduct", function(e){
			e.preventDefault();

			this.productModal.showModal();

		});



	}
	render(){
		this.container.html( this.html() );
		if(!this.isRendered){
			this.isRendered = true;
		}
	}
}

class ProductModal {

	static fields = {
		name: ".name",
		description: ".description",
		price: ".price",
		currency: ".currency",
		picture: ".img_view"
	}

	constructor(viewId){
		this.viewId = viewId;
	}
	showModal(){
		this.viewId.openModal();
	}
	hideModal(){
		this.viewId.closeModal();
	}
	loadInfo(product){
	
		this.view.find(ProductModal.fields.name).val(product.getName());
		this.view.find(ProductModal.fields.description).val(product.getDescription());
		this.view.find(ProductModal.fields.price).val(product.getPrice());
		this.view.find(ProductModal.fields.currency).val(product.getCurrency());
		this.view.find(ProductModal.fields.picture).attr("src", product.getPictureUrl());

	}

	save(){

		//
		let name = this.view.find(ProductModal.fields.name).val();
		let description = this.view.find(ProductModal.fields.description).val();
		let price = this.view.find(ProductModal.fields.price).val();
		let currency = this.view.find(ProductModal.fields.currency).val();
		let picture = this.view.find(ProductModal.fields.picture).attr("src");

		let productInfo = {
			name: name,
			description: description,
			price: price,
			currencyAbbr: currency,
			mainPictureURL: picture,
			rank: -1
		}

		let newProductComp = new ProductComp(productInfo);
	}


}


