<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email', 'WA', 'lineId', 'github',
        'birthPlace', 'birthDate', 'CV', 'IdCard',
    ];
}
