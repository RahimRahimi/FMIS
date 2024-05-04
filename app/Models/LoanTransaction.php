<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'loan_id',
        'amount',
        'date',
        'recipient_id',
        'description',
        'created_by'
    ];

    public function loan(){
        return $this->belongsTo(Loan::class);
    }
}
