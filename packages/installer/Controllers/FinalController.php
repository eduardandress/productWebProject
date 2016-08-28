<?php

namespace Installer\Controllers;

use App\Http\Controllers\Controller;
use Installer\Helpers\InstalledFileManager;

class FinalController extends Controller
{
    /**
     * Update installed file and display finished view.
     *
     * @param InstalledFileManager $fileManager
     * @return \Illuminate\View\View
     */
    public function finish(InstalledFileManager $fileManager)
    {
        $fileManager->update();

        return view('installer::finished');
    }
}