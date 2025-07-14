<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected static function booted()
    {
        static::creating(function ($package) {
            if (empty($package->slug)) {
                $package->slug = Str::slug($package->name);
            }
        });
    }

}