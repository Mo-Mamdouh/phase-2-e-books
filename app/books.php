<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable =['imagePath', 'title', 'author', 'price','description'];
}
