<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{Person, Budget, Deputy, Administration};

class Expense extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'payee_id',
        'budget_id',
        'amount',
        'payer_id',
        'recipient_id',
        'reference_id',
        'date',
        'description',
        'created_by'
    ];
    // Eloquent Relationships
    public function budget(){
        return $this->belongsTo(Budget::class);
    }

    // With People
    public function payer() {
        return $this->belongsTo(Person::class, 'payer_id');
    }

    public function payee() {
        return $this->belongsTo(Person::class, 'payee_id');
    }

    public function recipient() {
        return $this->belongsTo(Person::class, 'recipient_id');
    }

    public function deputies(){
        return $this->belongsToMany(Deputy::class)->withTimestamps();
    }

    public function administrations(){
        return $this->belongsToMany(Administration::class)->withTimestamps();
    }

    // /eloquent relationships
}
