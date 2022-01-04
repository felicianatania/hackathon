<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment', 'groupId'
    ];

    public function user(){
        return $this -> hasOne(User::class);
    }

    use HasFactory;
}
