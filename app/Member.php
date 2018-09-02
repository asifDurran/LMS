<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Member extends Model
{
   protected $table = 'members';

   protected $fillable = ['fname','lname','country','city','street','DOB','personalNumber','phoneNumber','email'];

   use softDeletes;

   protected $date = ['deleted_at'];
}
