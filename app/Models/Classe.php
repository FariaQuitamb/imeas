<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];
    use HasFactory;

    /**
     * Get all of the eclesiastic for the Classe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eclesiastic()
    {
        return $this->hasMany(Eclesiastic::class);
    }
}
