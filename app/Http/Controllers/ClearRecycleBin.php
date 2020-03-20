<?php

namespace App\Http\Controllers;

use Storage;

class ClearRecycleBin extends Controller
{
    public function __construct(){

    }
    
    /**
     * clear recycle bin 
     */

    public function clear_recycle_bin()
    {
        Storage::deleteDirectory('fileEmail');
        return \redirect('/mail');
    }
}
