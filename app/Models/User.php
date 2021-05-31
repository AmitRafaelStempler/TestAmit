<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'id',
        'name',
        'email',
        'created_at',
        'updated_at',
    ];
}
