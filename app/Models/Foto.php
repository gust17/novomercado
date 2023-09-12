<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'fotos';


    protected $guarded = ['id'];


    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
