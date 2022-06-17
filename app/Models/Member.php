<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'name',
        'uid',
        'phone',
        'father',
        'mother',
        'birthdate',
        'genre',
        'province',
        'county'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function eclesiastic()
    {
        return $this->hasOne(Eclesiastic::class);
    }
}
