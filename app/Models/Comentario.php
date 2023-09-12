<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use CrudTrait;
    use HasFactory;


    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
