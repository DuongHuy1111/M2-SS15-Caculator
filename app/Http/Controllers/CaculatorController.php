<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function caculate(Request $request)
    {
        $number_one = $request->number_one;
        $number_two = $request->number_two;
        if (isset($_POST['addition'])) {
            $result = $number_one + $number_two;
            return view('index', compact('result'));
        } else if (isset($_POST['subtraction'])) {
            $result = $number_one - $number_two;
            return view('index', compact('result'));
        } else if (isset($_POST['multiplication'])) {
            $result = $number_one * $number_two;
            return view('index', compact('result'));
        } else {
            try {
                $result = $number_one / $number_two;
                return view('index', compact('result'));
            } catch (\Exception $exception) {
                echo $exception->getMessage();
            }
        }
    }
}
