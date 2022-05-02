<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'address'
    ];

    /**
     * Get the employees that work in an office.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
