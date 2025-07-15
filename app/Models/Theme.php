<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'thumbnail', 'price', 'description', 'preview_url'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

}
