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
}