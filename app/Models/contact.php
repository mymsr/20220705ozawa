<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $primarykey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'postcode',
        'address',
        'building',
        'opinion',
    ];
}
