<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'RestaurantID',
        'MenuName',
     
    ];
    protected $primaryKey = 'MenuID';

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
