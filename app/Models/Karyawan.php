<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'job', 'date_birth', 'mentor_id'];

    protected $casts = [
        'date_birth' => 'date',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
