<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tensao extends Model
{
    use HasFactory;
    protected $table = "tensao";
    protected $fillable = [
        "descricao",
    ];
}

