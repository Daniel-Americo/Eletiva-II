<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = "produtos";
    public $incrementing = true;
    protected $fillable = ['nome', 'valor'];
}
