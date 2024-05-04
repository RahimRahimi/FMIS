<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Person, Expense, Procurement, Administration};
use Illuminate\Database\Eloquent\SoftDeletes;

class Deputy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
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

    public function administrations()
    {
        return $this->hasMany(Administration::class);
    }
    // /eloquent relationships

}
