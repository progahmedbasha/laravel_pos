<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['id', 'name', 'phone', 'address','about','mail'];
    protected $table = "suppliers";
}
