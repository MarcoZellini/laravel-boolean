<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function cocktails()
    {
        return response()->json([
            'success' => true,
            'result' => Cocktail::orderByDesc('id')->paginate(3)
        ]);
    }

    public function filter($category)
    {

        $category = str_replace('%20', ' ', $category);

        $query = Cocktail::where('category', $category)->get();

        return response()->json([
            'success' => true,
            'result' => $query
        ]);
    }
}
