<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];

    //$guarded -> field yang tidak boleh disi kebalikam $fillable yang nama field yang boleh disi
}
