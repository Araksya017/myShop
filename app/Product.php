<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description'];

    public static function withTranslation(string $getLocale)
    {
    }

    public function user(){
        return $this->hasOne(User::class,'id','created_user_id');
    }
}
