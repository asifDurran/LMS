<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeleted;

class Publisher extends Model
{
    protected $table = 'publishers';

    protected $fillable = ['country','city','publishDate','shopName'];

    use SoftDeletes;
    protected $date = ['deleted_at'];

}
