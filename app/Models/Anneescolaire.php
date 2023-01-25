<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anneescolaire extends Model
{
    use HasFactory;

    protected $table = "anneescolaires";

    protected $filable = [
        'name',
        'date_debut',
        'date_fin',
        'status',
        'ecole_id'
    ];
}
