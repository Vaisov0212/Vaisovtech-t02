<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $tbale='heroes';
    protected $fillable=[
        'main',
        'subtitle',
        'description',
        'project',
        'experince',
        'clients',
        'image'
    ];
}
