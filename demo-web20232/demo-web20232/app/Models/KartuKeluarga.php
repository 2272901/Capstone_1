<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';

    protected $fillable = [
        'no',
        'nama_kepala',
    ];

    protected $primaryKey = 'no';

    public function citizens(): HasMany
    {
        return $this->hasMany(Penduduk::class);
    }
}
