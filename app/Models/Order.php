<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'theme_id',
        'order_code',
        'notes',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function invitation()
    {
        return $this->hasOne(Invitation::class);
    }

}