<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'features' => 'array',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }

}