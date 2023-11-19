<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Css extends Model
{
    use HasFactory;
    //nome da tabela, se for diferente do padrão (logicas)
    protected $table = 'csses';

    //conexão do banco de dados específica
    protected $connection = 'mysql_second';
}
