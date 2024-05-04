<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currency;
class ExchangeRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_code',
        'amount',
        'date',
        'created_by'
    ];

    public function currency(){
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }
}
