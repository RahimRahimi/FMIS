<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Deputy,Administration,Loan,BudgetIncome, Expense};
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'last_name',
        'father_name',
        'phone_no',
        'province',
        'district',
        'administration_id',
        'rank',
        'created_by'
    ];

    // Eloquent Relationships
    public function deputy(){
        return $this->belongsTo(Deputy::class);
    }

    public function administration(){
        return $this->belongsTo(Administration::class);
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }

    public function budgetIncomes(){
        return $this->hasMany(BudgetIncome::class);
    }

    // With Expense Table
    public function expensesAsPayer() {
        return $this->hasMany(Expense::class, 'payer_id');
    }

    public function expensesAsPayee() {
        return $this->hasMany(Expense::class, 'payee_id');
    }

    public function expensesAsRecipient() {
        return $this->hasMany(Expense::class, 'recipient_id');
    }

    public function expensesAsReference() {
        return $this->hasMany(Expense::class, 'reference_id');
    }
    // /eloquent relationships
}
