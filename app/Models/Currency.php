<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Procurement, ExchangeRate};

class Currency extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'code',
        'name'
    ];

    public function exchangeRates() {
        return $this->hasMany(ExchangeRate::class, 'currency_code');
    }
    public function procuremets(){
        return $this->hasMany(Procurement::class, 'currency_code');
    }
}
