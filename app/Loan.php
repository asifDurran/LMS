<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Loan extends Model
{
    protected $table = 'loans';

    protected $fillable = ['issueDate','issueUntil','returnDate'];

    use softDeletes;
    protected $date = ['deleted_at'];

}
