<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function index(Request $request)
    {
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');
        $operator = $request->input('operator');
        $result = 0;
        if ($operator == '+') {
            $result = $firstnumber + $secondnumber;
        } elseif ($operator == '-') {
            $result = $firstnumber - $secondnumber;
        } elseif ($operator == '*') {
            $result = $firstnumber * $secondnumber;
        } elseif ($operator == '/') {
            $result = $firstnumber / $secondnumber;
        } elseif ($operator == '%') {
            $result = $firstnumber % $secondnumber;
        } else {
            $result = 0;
        }

        // echo $result;
        return redirect('/')->with('message', 'answer :' . $result);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
