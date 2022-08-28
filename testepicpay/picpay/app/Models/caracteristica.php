<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caracteristica extends Model
{

protected $fillable = ['nome', 'descricao', 'tensao_id', 'marca_id'];


public  function marcas(){
    return $this->hasMany(marca::class,"id","marca_id");
}
public  function umamarca(){
    return $this->hasOne(marca::class,"id","marca_id");
}

public  function tensoes(){
    return $this->hasMany(tensao::class,"id","tensao_id");
}

public  function umatensao(){
    return $this->hasOne(tensao::class,"id","tensao_id");
}


}
