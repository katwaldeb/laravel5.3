<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    //
    
    // start of index
    public function index()
    {

        $a = 's';
        
        return view('welcome');
    
    }// end of index
}
