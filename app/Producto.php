<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  public $table = "productos";
  public $guarded = [];

    public function usuarios() {
        return $this->belongsToMany(Producto::class,'Carritos','idProducto','idUsuario');
    }
}
