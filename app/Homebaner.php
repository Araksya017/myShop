<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Homebaner extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description'];

}
