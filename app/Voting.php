<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $guarded = [];
    protected $fillable = ['kandidat_id','user_id'];
}
