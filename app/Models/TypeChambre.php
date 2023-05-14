<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeChambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'commodite_id',
        'nbrDelit',
        'nom',
    ];
    public function commodites() : BelongsTo
    {
        return $this->belongsTo(Commodite::class);
    }
    public function chambres() : HasMany
    {
        return $this->hasMany(Chambre::class);
    }
}
