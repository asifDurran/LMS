<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Shelf extends Model
{
    protected $table = 'shelf';
    protected $fillable = ['shelfArea','shelfSymbol'];

    use softDeletes;

    protected $date = ['deleted_at'];
}
