<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eletrodomestico extends Model
{
    use HasFactory;

    protected $table = "eletrodomestico";
    protected $fillable = [
        "nome",
        "descricao",
        "marca_id",
        "tensao_id"

    ];

    public function marcas(){

        return $this->hasMany(Marca::class, "marca_id", "id");
    }
}
