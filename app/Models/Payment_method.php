<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'bank',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'payment_method_id');
    }

}
