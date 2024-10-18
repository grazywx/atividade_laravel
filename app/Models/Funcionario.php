<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Foreach_;
class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'salario',
    ];

}