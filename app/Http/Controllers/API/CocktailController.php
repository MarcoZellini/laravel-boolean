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
    /*     public function FilteredCocktail()
    {
        return response()->json([
            'success' => true,
            'result' => Cocktail::with("category")->get()
        ]);
    } */
}
