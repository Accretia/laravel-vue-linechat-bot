<?php

namespace App\Http\Controllers\API;

use App\Http\Models\Brand;
use App\Http\Models\Category;
use App\Http\Models\Color;
use App\Http\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class ProductController extends Controller
{
    public static function getProductWithOffset(Request $request)
    {
        (isset($request->offset))? $offset = $request->offset : $offset = 0;
        $product = Product::getProductWithOffset(0 , $offset , $request);
        return Response::json($product);

    }

    public static function getBrands(Request $request)
    {
        $brands = Brand::all();
        foreach ($brands as $index=>$brand){
            $count = Product::where("brand_id" , $brand->id)->count();
            $brands[$index]["count"] = $count;
        }
        return Response::json($brands);

    }

    public static function getColors(Request $request)
    {
        $colors = Color::all();
        foreach ($colors as $index=>$color){
            $count = Product::where("color_id" , $color->id)->count();
            $colors[$index]["count"] = $count;
        }
        return Response::json($colors);

    }

    public static function getCategories(Request $request)
    {
        $cats = Category::all();
        foreach ($cats as $index=>$cat){
            $count = Product::where("category_id" , $cat->id)->count();
            $cats[$index]["count"] = $count;
        }
        return Response::json($cats);

    }

    public static function getProductDetail($id)
    {
        $product = Product::find($id);
        $product->load(['brand' , 'color' , 'category']);
        return Response::json($product);
    }

    public static function searchProduct(Request $request)
    {
        $query = Product::query();
        $term = $request->term;
        if($request->term){
            $query->where("name" ,"like" , '%'.$term.'%');
            $request->term;
        }
        //print_r($query->get());
        //echo $product = $query->toSql();
        return Response::json($query->get());

    }
    
}
