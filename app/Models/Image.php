<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['id_product','image'];

    public function getListimages()
    {
        $listimages = DB::table('images')
                                ->join('products','images.id_product','=','products.id')
                                ->select('images.*','products.name AS product_name')
                                ->get();
        return $listimages;
    }

    public function getListimagesById($id)
    {
    $getListimagesById = DB::table('images')
                                    ->join('products','images.id_product','=','products.id')
                                    ->where('images.id','=',$id)
                                    ->select('images.*','products.name AS product_name')
                                    ->get();
    return $getListimagesById[0];
    }

}
