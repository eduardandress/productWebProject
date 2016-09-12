<?php 

namespace App\Helpers;

/**
* Application Helper Functions
*/
abstract class AppHelper {
  
  static public function isPackageInstalled($packageName) {

        if (config('installedPackages') && array_key_exists($packageName, config('installedPackages'))) {
            return true;
        }

        return false;
  }

/**
 * Return a formatted error messages.
 *
 * @param $message
 * @param string $status
 * @return array
 */
	static public function  response($message, $status = 'danger'){
	    return array(
	        'status' => $status,
	        'message' => $message
	    );
	}

}