<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $guarded = ['id'];

    public function user(): BelongsTo 
    {
        return $this->BelongsTo(User::class);
    }

    public function prodi(): BelongsTo 
    {
        return $this->BelongsTo(Prodi::class);
    }
}
