<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $table = "tcuentas";
    protected $fillable = ['CCUENTA','TIPOCUENTA', 'USUARIO', 'FDESDE'];
    protected $hidden = ['CLAVE'];

    public function obtenerCuentas(){
        return Cuenta::all();
    }

    public function obtenerCuentasPorCodigo($id){
        return Cuenta::find($id);
    }
}
