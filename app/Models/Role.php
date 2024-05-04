<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Permission;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'description'
    ];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class)->withTimestamps(); 
    }

    public function hasPermission($permission){
        return $this->permissions->contains('name', $permission);
    }
}
