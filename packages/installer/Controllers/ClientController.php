<?php
namespace Installer\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Core\Repositories\ClientRepository;
use Core\Models\Client\Client;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use File;
use Image;

class clientController extends Controller
{
 

  private $clientRepo;

  public function __construct(clientRepository $clientRepo){
	   $this->clientRepo = $clientRepo;
  }
  private function saveImage($data, $filename){
  	 $imageUrl = '';

  	 try {

        $img = imagecreatefromstring($data);
    		$shortURL ='assets/images/clients/';
    		$destinationPath = public_path().'/'.$shortURL ;
    		imagepng($img, $destinationPath.$filename);
    	 	$imageUrl = $shortURL.$filename;
        
  	 } catch (\Exception $e) {

  	 }

  	 return $imageUrl;
  }
  public function save(Request $request) {
   
  	$clients = json_decode($request->getContent(), true);

    $clients =  $clients !== null ?  $clients : array();
    //Cleaning the client Img Folder
    $clientImgPath = public_path().'/'."assets/images/clients/";
    File::cleanDirectory($clientImgPath);


  	\DB::beginTransaction();

    //Saving the clients
  	$replaceTable =  true;
  	$response = '';

	  if($replaceTable) {
  			\DB::table('client')->truncate();
  	}
  	foreach ($clients as  $client) {
  		try {

        $data = $client['mainPictureURL'];
        $imgUrl =  '';

        if($data !== ''){

          $data  = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
          $filename = 'client_'. mt_rand() . '.png';
          $imgUrl = $this->saveImage($data, $filename);
          
        }
        
        $client['mainPictureURL'] =  $imgUrl;
        $this->clientRepo->create($client);
	  		
  		} catch (\Exception $e) {
  			$response =  \AppHelper::response($e->getMessage());
  			return response()->json($response);	
  			\DB::rollBack();
  		}
  	}

  	try {

  		\DB::commit();

  	} catch(\Exception $e){

  		$response =  \AppHelper::response($e->getMessage());
  		\DB::rollBack();
  		return response()->json($response);	
  	}



  	return response()->json(\AppHelper::response('clients created!', 'success'
  		));

  }

}
