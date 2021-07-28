<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIndex()
    {

        //$namevalue should not have (' ')
        // $test = array('pranto','rahman','shunni','sarah','binte','atiqur');
        // return view('Homepage',['valuename'=>$test]);

        return view('Homepage');
    }
}
