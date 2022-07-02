<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calc(Request $req){
        $op = $req->input('ops');
        $f_Num = $req->input('firstNum');
        $s_Num = $req->input('secondNum');
        $result = 0;

        if($op == "plus")
        {
            $result = $f_Num + $s_Num;
        }
        else if($op == "min")
        {
            $result = $f_Num - $s_Num;
        }
        else if($op == "mult")
        {
            $result = $f_Num * $s_Num;
        }
        else if($op == "div")
        {
            $result = $f_Num / $s_Num;
        }
        else
        {
            $result = 0;
        }
        

        return redirect('/')->with('info','Your answer is: '.$result);
    }
}
