<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prodi extends Model
{
    use HasFactory;
    protected $table = "prodi";
    protected $guarded = ['id'];

    public function mahasiswa(): HasOne 
    {
        return $this->hasOne(Mahasiswa::class);
    }
}
