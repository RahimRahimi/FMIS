<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{BudgetIncome,Loan, Procurement};
use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'amount',
        'remaining_amount',
        'start_date',
        'end_date',
        'date',
        'description',
        'created_by'
    ];
    // Eloquent Relationships
    public function budgetIncomes() {
        return $this->hasMany(BudgetIncome::class);
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }

    public function procurements(){
        return $this->hasMany(Procurement::class);
    }
    // /eloquent relationships

}
