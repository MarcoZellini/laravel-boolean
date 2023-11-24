<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function filter($slug)
    {

        $category = Category::where('slug', $slug)->first();

        if ($category) {
            $query = Cocktail::where('category_id', $category->id)->with('category')->get();
            return response()->json([
                'success' => true,
                'result' => $query
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ops! Categoria non trovata.'
            ]);
        }
    }
}
