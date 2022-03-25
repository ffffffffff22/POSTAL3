<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindNumber extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function FindNumberFunction($value, $LimiteSuperior = 10000000000, $LimiteInferior = 1)
    {
        if($value > 10000000000 || $value < 1)
        {
            return "Número invalido";
        }
        $pivot = intval((($LimiteSuperior+$LimiteInferior)-1)/2);
        
        if($value == $pivot)
        {
            return $pivot;
        }
        elseif($value == $LimiteSuperior)
        {
            return $LimiteSuperior;
        }
        elseif($value == $LimiteInferior)
        {
            return $LimiteInferior;
        }
        elseif($value < $pivot)
        {
            return FindNumber::FindNumberFunction($value, $pivot-1, $LimiteInferior);
        }
        elseif($value > $pivot)
        {
            return FindNumber::FindNumberFunction($value, $LimiteSuperior, $pivot+1);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
