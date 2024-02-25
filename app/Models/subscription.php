<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;

    protected $primaryKey = 'SubscriptionID';
    protected $fillable = [
        'PlanName',
        'Description',
        'NumMenuItemsAllowed',
        'MediaTypesAllowed',
        'ScansAllowed',
        'Duration',
        'Price',
    ];

    public function user()
    {
        return $this->hasMany(user::class);
    }
}
