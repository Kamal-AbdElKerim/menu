<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'ItemName',
        'Description',
        'Price',
        'MenuID'
     
    ];
    protected $primaryKey = 'ItemID';

    public function menu()
    {
        return $this->belongsTo(Menu::class , 'MenuID');
    }


}

