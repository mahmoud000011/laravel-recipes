<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\FavouriteResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function index(Request $request)
    {
        $favourite = Favourite::with('recipe')
            ->where('device_id', $request->device_id)
            ->get();
           
        return response()->json([
            'message' => ' successfully',
            'data' => $favourite
        ]);
    }
    public function store(Request $request)
    {
        $favourite = Favourite::Create([
            'device_id' => $request->device_id,
            'recipe_id' => $request->recipe_id,
        ]);

        return response()->json([
            'message' => 'Added successfully',
            'data' => $favourite
        ]);
    }
    public function destroy($id)
    {
        $favourite = Favourite::find($id);
        $favourite->delete();

        return response()->json([
            'message' => 'Removed  successfully'
        ]);
    }

}