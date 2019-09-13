<?php

namespace App\Http\Controllers\API;

use App\Http\Models\Brand;
use App\Http\Models\Category;
use App\Http\Models\Color;
use App\Http\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class ColorController extends Controller
{
    

    public static function getColors(Request $request)
    {
        $colors = Color::all();
        foreach ($colors as $index=>$color){
            $count = Product::where("color_id" , $color->id)->count();
            $colors[$index]["count"] = $count;
        }
        return Response::json($colors);

    }

    public static function store(Request $request)
    {
        $color = new Color();
        $color->name = $request->name;
        $color->save();
        return Response::json($color);

    }

    public static function delete($id){
        $color = Color::find($id);
        $color->delete();
        
        return Response::json($color);
    }
    
}
