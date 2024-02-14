<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image','category','name','price','amount','description','stock'];



    public function getListproductsById($id)
    {
        $getListproductsById = DB::table('products')
            ->join('images','products.id','=','images.id_product')
            ->where('products.id','=',$id)
            ->select('products.*','images.image AS image_image')
            ->get();
        return $getListproductsById;
    }
}
