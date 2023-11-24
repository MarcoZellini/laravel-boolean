<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        return response()->json([
            'success' => true,
            'categories' => Category::all()
        ]);
    }
}
