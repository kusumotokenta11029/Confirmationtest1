<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'tel-1',
        'tel-2',
        'tel-3',
        'address',
        'building',
        'content',
        'detail'
    ];
}
