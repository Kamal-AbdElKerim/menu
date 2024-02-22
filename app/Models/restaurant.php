<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Address',
        'UserID',
        'Hours',
    ];
}
