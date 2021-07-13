<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = "wishlist";
    protected $fillable = ["user_id", "product_id", "count", "color", "size"];


}
