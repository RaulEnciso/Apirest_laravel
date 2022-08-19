<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;
    protected $fillable = ['cargo'];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_cargo';
}
