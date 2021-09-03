<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function index(Request $request){
        $firstvalue = $request->input('firstvalue');
        $secondvalue = $request->input('secondvalue');
        $thirdvalue = $request->input('thirdvalue');
        
    
        $rectangle = $firstvalue * $secondvalue;
        $cuboid = $secondvalue * $secondvalue * $thirdvalue;
        $square = $firstvalue * $firstvalue;
        
        $results = array($rectangle, $cuboid, $square);

            
        // echo $result;
        return view('Math',['results' => $results]);
}
}
