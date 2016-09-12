<?php
namespace Installer\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Core\Repositories\ProductRepository;
use Core\Models\Product\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use File;

use Image;

class ProductController extends Controller
{
 

  private $productRepo;

  public function __construct(ProductRepository $productRepo){

	   $this->productRepo = $productRepo;

  }
  private function saveImage($data, $filename){
  	 $imageUrl = '';

  	 try {
		
  		$img = imagecreatefromstring($data);
  		$shortURL ='assets/images/products/';
  		$destinationPath = public_path().'/'.$shortURL ;
  		imagepng($img, $destinationPath.$filename);
  	 	$imageUrl = $shortURL.$filename;

  	 } catch (\Exception $e) {
  	 }

  	 return $imageUrl;
  }
  public function save(Request $request) {
   
  	$products = json_decode($request->getContent(), true);
    //Cleaning the product Img Folder
    $productImgPath = public_path().'/'."assets/images/products/";
    File::cleanDirectory($productImgPath);

  	\DB::beginTransaction();

    //Saving the products
  	$replaceTable =  true;
  	$response = '';

	if($replaceTable) {
  			\DB::table('product')->truncate();
  	}
  	foreach ($products as  $product) {
  		try {
  			
  			$data = $product['mainPictureURL'];
  			$imgUrl =  '';

  			if($data !== ''){

	  			$data  = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
		  		$filename = 'product_'. mt_rand() . '.png';
		  		$imgUrl = $this->saveImage($data, $filename);
  			}
  			
	  		$product['mainPictureURL'] =  $imgUrl;
	  		$this->productRepo->create($product);
	  		
  		} catch (\Exception $e) {
  			$response =  \AppHelper::response($e->getMessage());
  			\DB::rollBack();
  			return response()->json($response);	
  		}
  	}

  	try {

  		\DB::commit();

  	} catch(\Exception $e){

  		$response =  \AppHelper::response($e->getMessage());
  		\DB::rollBack();
  		return response()->json($response);	
  	}



  	return response()->json(\AppHelper::response('Products created!', 'success'
  		));

  }

}
