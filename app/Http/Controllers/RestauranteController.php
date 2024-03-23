<?php

namespace App\Http\Controllers;

use App\Models\restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('burguesia.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(restaurante $restaurante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(restaurante $restaurante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, restaurante $restaurante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(restaurante $restaurante)
    {
        //
    }
}
