<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'type_chambre_id',
        'prix',
        'dispo',
        'numChambre',
    ];
    public function typeChambre() : BelongsTo
    {
        return $this->belongsTo(TypeChambre::class);
    }
    public function roomservices() : HasMany
    {
        return $this->hasMany(RoomService::class);
    }

}
