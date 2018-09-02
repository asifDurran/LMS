<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Author extends Model
{
    protected $table = 'authors';

    protected $fillable = ['fname','lname','country','city','street'];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
