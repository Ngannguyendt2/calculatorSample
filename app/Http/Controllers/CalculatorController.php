<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function index(Request $request){
        $number1=$request->input('num1');
        $operator=$request->input('operator');
        $number2=$request->input('num2');
        $result=null;
        switch ($operator){
            case '+':
              $result =$number1+$number2;
              break;
            case '-':
                $result =$number1-$number2;
                break;
            case '*':
                $result =$number1*$number2;
                break;
            case '/':
                $result =$number1/$number2;
                break;
            default:
                break;
        }
        return view('index',compact('result'));
    }
}
