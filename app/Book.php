<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['bookTitle','shortSumary','isban','availability','category','subject','edition','shelfId'];
  
   use SoftDeletes;
    
   protected $date =['deleted_at'];

}
  
