<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stu extends Model
{
    protected $table = 'stu';
    protected $fillable = [
        'name', 'email'
    ];
}
