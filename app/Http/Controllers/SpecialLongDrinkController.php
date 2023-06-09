<?php

namespace App\Http\Controllers;

use App\Models\SpecialLongDrink;
use Illuminate\Http\Request;

class SpecialLongDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $special_long_drinks = SpecialLongDrink::all();
        return view('admin.special_long_drinks.index', compact('special_long_drinks'));
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
    public function show(SpecialLongDrink $specialLongDrink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpecialLongDrink $specialLongDrink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SpecialLongDrink $specialLongDrink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpecialLongDrink $specialLongDrink)
    {
        //
    }
}
