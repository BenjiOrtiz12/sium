<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.admin.index');
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
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function show(cama $cama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function edit(cama $cama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cama $cama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cama  $cama
     * @return \Illuminate\Http\Response
     */
    public function destroy(cama $cama)
    {
        //
    }
}
