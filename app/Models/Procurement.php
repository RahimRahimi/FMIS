<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{Currency, Budget, Deputy, Administration};

class Procurement extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'type',
        'payee_id',
        'item',
        'quantity',
        'price',
        'budget_id',
        'currency_code',
        'location',
        'payer_id',
        'recipient_id',
        'date',
        'reference_id',
        'description',
        'created_by'
    ];

    // Eloquent Relationships
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_code', 'code');
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function deputies()
    {
        return $this->belongsToMany(Deputy::class)->withTimestamps();
    }

    public function administrations()
    {
        return $this->belongsToMany(Administration::class)->withTimestamps();
    }
    // /eloquent relationships
}
