<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';


    public function color(){
        return $this->hasOne('App\Http\Models\Color', 'id', 'color_id');
    }

    public function brand(){
        return $this->hasOne('App\Http\Models\Brand', 'id', 'brand_id');
    }

    public function category(){
        return $this->hasOne('App\Http\Models\Category', 'id', 'category_id');
    }


    public static function getProductWithOffset($offset , $limit , $request)
    {
        $product = Product::query();
        if($request->cat){
            $product->where("category_id" , $request->cat);
        }
        if($request->brand){
            $product->where("brand_id" , $request->brand);
        }
        $product = $product->offset($offset)->limit($limit)->get();
        if(sizeof($product) > 0){
            $product->load(['color','brand','category' ]);
            return $product;
        }
        else{
            return 0;
        }

    }

}