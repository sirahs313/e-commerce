<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'name',
        'price',
        'weight',
        'description',
        'image',
        'category',
        'create_date',
        'stock',
        'user_id',
        'brand_id',
        'category_id',
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function brand()
{
    return $this->belongsTo(Brand::class, 'brand_id');
}

public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
public function stock()
    {
        return $this->hasOne(Stock::class, 'product_id');
    }
    public function price()
    {
        return $this->hasOne(Price::class, 'product_id');
    }
    public function sales()
    {
    return $this->hasMany(Sale::class, 'product_id');
    }
}
