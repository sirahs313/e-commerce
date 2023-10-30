<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'country_id',
        'dateProces',
        'payment_method_id',
        'quanty',
    ];
    public function payment_method()
    {
        return $this->belongsTo(Payment_method::class, 'payment_method_id');
    }
    public function shipment()
{
    return $this->hasOne(Shipment::class, 'order_id');
}
public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
