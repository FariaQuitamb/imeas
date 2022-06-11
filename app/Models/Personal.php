<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function degree()
    {
        return $this->hasOne(Degree::class, 'degree_id');
    }

    public function occupations()
    {
        return $this->hasMany(Occupation::class);
    }
}
