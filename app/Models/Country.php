<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'country_id');
    }
   public function state()
    {
        return $this->belongsTo(State::class);
    }
    
}
