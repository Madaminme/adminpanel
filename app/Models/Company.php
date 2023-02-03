<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'address',
        'email',
        'thumbnail',
        'website',
    ];


    protected $with = ['employer'];


    public function employer()
    {
        return $this->hasMany(Employer::class);
    }
}
