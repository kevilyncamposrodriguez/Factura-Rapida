<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    protected $fillable = [
        "id_company","nature","amount"
    ];
}
