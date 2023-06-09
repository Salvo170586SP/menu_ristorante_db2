<?php

namespace App\Http\Controllers;

use App\Models\Aperitif;
use Illuminate\Http\Request;

class AperitifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aperitifs = Aperitif::all();

        return view('admin.aperitifs.index', compact('aperitifs'));
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
    public function show(Aperitif $aperitif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aperitif $aperitif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aperitif $aperitif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aperitif $aperitif)
    {
        //
    }
}
