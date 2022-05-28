<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_passeport','nom','prenom','date_naiss','pays','tel','email','date_inscription','reference_vehicule','rang'
    ];

}
