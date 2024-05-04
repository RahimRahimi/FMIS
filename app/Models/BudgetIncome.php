<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
class BudgetIncome extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget_id',
        'amount',
        'person_id',
        'date',
        'description',
        'created_by'
    ];
    
    public function person(){
        return $this->belongsTo(Person::class);
    }
}
