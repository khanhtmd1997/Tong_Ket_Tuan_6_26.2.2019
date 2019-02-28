<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function Caculator(Request $request){
    	$number_One = $request->numberOne;
    	$number_Two = $request->numberTwo;
    	$caculator = $request->total;
    	$total_ = 0;
    	switch ($caculator) {
    	 	case 'addtion':
    	 		$total_ = $number_One + $number_Two;
    	 		break;
    	 	case 'subtraction':
    	 		$total_ = $number_One - $number_Two;
    	 		break;
    	 	case 'multiplication':
    	 		$total_ = $number_One * $number_Two;
    	 		break;
    	 	default:
    	 		if($number_Two != 0){
    	 			$total_ = $number_One / $number_Two;
    	 		}else echo "Số thứ hai phải khác 0";
    	 		break;

    	 	
    	 }

    	 return view("caculator", compact(["total_"])); 
    }
}
