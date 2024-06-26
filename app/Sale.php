<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['nama','alamat','email','telepon', 'owner_id'];

    protected $hidden = ['created_at','updated_at'];
}
