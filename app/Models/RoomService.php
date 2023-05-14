<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomService extends Model
{
    use HasFactory;
    protected $fillable = [
        'personnel_id',
        'chambre_id',
        'service',
    ];
    public function personnels() : BelongsTo
    {
        return $this->belongsTo(Personnel::class);
    }
    public function chambres() : BelongsTo
    {
        return $this->belongsTo(Chambre::class);
    }
}
