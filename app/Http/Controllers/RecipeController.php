<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;
 use App\Http\Requests\RecipeRequest;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view( 'recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {
        
        Recipe::create($request->all());
        return redirect('/recipes');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $recipes = Recipe::find($id);
        return view('recipes.show', compact('recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $recipes= Recipe::find($id);
     return view('recipes.edit', compact('recipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeRequest $request, string $id)
    {
        $recipes= Recipe::find($id);
        $recipes->update($request->all());
        return redirect('/recipes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipes= Recipe::find($id);
        $recipes->delete();
        return redirect('/recipes');
        
    }
}
