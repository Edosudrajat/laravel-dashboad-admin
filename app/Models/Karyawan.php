<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /** @use HasFactory<\Database\Factories\KaryawanFactory> */
    use HasFactory;

    protected $fillable = ['name', 'job', 'date_birth', 'mentor_id'];

    public function relasiKementor() {
        return $this->belongsTo(Mentor::class);
    }
}
