<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eclesiastic extends Model
{
    use HasFactory;

    protected $fillable = [
        'startat',
        'how',
        'member_id',
        'classe_id',
        'department_id',
        'baptized'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'id');
    }

    public function department()
    {
        return $this->hasOne(Departament::class, 'department_id');
    }
}
