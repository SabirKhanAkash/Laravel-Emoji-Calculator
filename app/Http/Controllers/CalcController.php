<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    // Server side Controller function that calculates 
    // the arithmatic logic operations from input response
    public function calc(Request $req){
        $op = $req->input('ops'); //operator variable
        $f_Num = $req->input('firstNum'); //first number variable
        $s_Num = $req->input('secondNum'); //second number variable
        $result = 0;

        if($op == "plus")
        {
            $result = $f_Num + $s_Num; //addition done
        }
        else if($op == "min")
        {
            $result = $f_Num - $s_Num; //subtraction done
        }
        else if($op == "mult")
        {
            $result = $f_Num * $s_Num; //multiplication done
        }
        else if($op == "div")
        {
            $result = $f_Num / $s_Num; //division done
        }
        else
        {
            $result = 0;
        }
        

        return redirect('/')->with('info','Your answer is: '.$result);  // result has been returned as function return value
    }
}
