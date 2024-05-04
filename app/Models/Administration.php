<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{Person, Expense, Procurement, Deputy};

class Administration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'deputy_id',
        'description',
        'created_by'
    ];
    // Eloquent Relationships
    public function person()
    {
        return $this->hasOne(Person::class);
    }

    public function expenses()
    {
        return $this->belongsToMany(Expense::class)->withTimestamps();
    }

    public function procurements()
    {
        return $this->belongsToMany(Procurement::class)->withTimestamps();
    }

    public function deputy()
    {
        return $this->belongsTo(Deputy::class);
    }
    // /eloquent relationships

}
