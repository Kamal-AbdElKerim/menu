<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class item extends Model implements HasMedia
{
    use InteractsWithMedia;
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

