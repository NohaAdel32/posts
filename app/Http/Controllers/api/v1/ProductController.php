<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return[
            new Middleware('auth:sanctum', except:['index'])
        ];
    }
    public function index(Request $request)
    {
        if ($request->has('cat_id')) {
            $products = Product::where('cat_id', $request->cat_id)->paginate(10);
        } else {
           
            $products = Product::paginate(10);
        }
        
        return response()->json($products, 200);
        
    }
}
