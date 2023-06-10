<?php

namespace App\Http\Controllers;

use App\Models\InternationalLongDrink;
use Illuminate\Http\Request;

class InternationalLongDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $international_long_drinks = InternationalLongDrink::all();

        return view('admin.international_long_drinks.index', compact('international_long_drinks'));
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
    public function show(InternationalLongDrink $internationalLongDrink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternationalLongDrink $internationalLongDrink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternationalLongDrink $internationalLongDrink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternationalLongDrink $internationalLongDrink)
    {
        //
    }
}
