<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LoanTransaction;
use App\Models\Person;

class Loan extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'borrower_id',
        'amount',
        'remaining_amount',
        'budget_id',
        'date',
        'term',
        'payer_id',
        'status',
        'description',
        'created_by'
    ];

    public function loanTransactions(){
        return $this->hasMany(LoanTransaction::class);
    }

    public function budget(){
        return $this->belongsTo(Budget::class);
    }

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
