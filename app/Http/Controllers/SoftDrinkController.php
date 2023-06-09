<?php

namespace App\Http\Controllers;

use App\Models\SoftDrink;
use Exception;
use Illuminate\Http\Request;

class SoftDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soft_drinks = SoftDrink::all();

        return view('admin.soft_drinks.index', compact('soft_drinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.soft_drinks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:soft_drinks',
        ], [
            'name.required' => 'Il nome è richiesto',
            'name.unique' => 'Il nome è già esistente',
        ]);

        try {
            $soft_drink = new SoftDrink();
            $soft_drink->name = $request->name;
            $soft_drink->description = $request->description;
            $soft_drink->cl = $request->cl;
            $soft_drink->price = $request->price;
            $soft_drink->save();

            return redirect()->route('admin.soft_drinks.index')->with('message', "$soft_drink->name creato con successo");;
        } catch (Exception $e) {

            return redirect()->route('admin.soft_drinks.index')->with('message', 'Errore nella creazione');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SoftDrink $softDrink)
    {
        return view('admin.soft_drinks.show', compact('softDrink'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoftDrink $softDrink)
    {
        return view('admin.soft_drinks.edit', compact('softDrink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoftDrink $softDrink)
    {
        $request->validate([
            'name' => 'required|string',
        ], [
            'name.required' => 'Il nome è richiesto',
        ]);

        try {
            $softDrink->update([
                'name' => $request->name,
                'description' => $request->description,
                'cl' => $request->cl,
                'price' => $request->price,
            ]);

            return redirect()->route('admin.soft_drinks.index')->with('message', "$softDrink->name modificato con successo");
        } catch (Exception $e) {

            return redirect()->route('admin.soft_drinks.index')->with('message', 'Errore nella modifica');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SoftDrink $softDrink)
    {
        $softDrink->delete();

        return back()->with('message', "$softDrink->name eliminato con successo");
    }
}
