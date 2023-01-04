<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class IndexController extends Controller
{

    public $month=10;
    public function index(Request $request){
        global $today,$monthNext,$yearNext,$monthPrev,$yearPrev;
        $today = filter_input(INPUT_POST, 'today');
        $monthNext = filter_input(INPUT_POST, 'monthNext');
        $yearNext = filter_input(INPUT_POST, 'yearNext');
        $monthPrev = filter_input(INPUT_POST, 'monthPrev');
        $yearPrev = filter_input(INPUT_POST, 'yearPrev');
        return view('index.index');
    }
    public function post(Request $request){
        if($request->has('next')){
            $month = $this->month + 1;
        } else if($request->has('prv')){
            $month = $this->month - 1;
        }
        redirect('index');
    }


}
