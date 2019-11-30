<?php

namespace edy;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name', 'short', 'body',
    ];
}
