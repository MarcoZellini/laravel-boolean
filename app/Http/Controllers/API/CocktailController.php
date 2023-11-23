<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function cocktails()
    {
        return response()->json([
            'success' => true,
            'result' => Cocktail::orderByDesc('id')->paginate(9)
        ]);
    }

    public function cocktail()
    {
        return response()->json([
            'success' => true,
            'result' => Cocktail::where('category', 'Cocktail')->get()
        ]);
    }

    public function drink()
    {
        return response()->json([
            'success' => true,
            'result' => Cocktail::where('category', 'Ordinary Drink')->get()
        ]);
    }
}
