<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request,$month){
        $calendar = calendar($section, $patient, $month);
        $month = new CarbonImmutable($month); 
        return view('index.index',compact( 'calendar', 'month'));
    }


}
