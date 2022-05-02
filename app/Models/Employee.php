<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'phone',
      'office_id',
      'job_title_id'
    ];

    /**
     * Get the office this employee works at.
     */
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    /**
     * Get the job title this employee has.
     */
    public function job_title()
    {
        return $this->belongsTo(JobTitle::class);
    }

}
