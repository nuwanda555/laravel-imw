<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];
    public $timestamps=false;

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

}
