<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return response()->json([
            'message' => 'successfully',
            
            'data' => $recipes
        ]);
    }
}
