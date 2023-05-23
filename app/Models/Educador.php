<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educador extends Model
{
    use HasFactory;
    protected $table = 'educadores';
    protected $fillable = ['nome', 'funcao', 'qualificacao', 'experiencia', 'progressao_carreira'];
}
