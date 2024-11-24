<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['program_id', 'image_path'];

    // Relasi Image ke Program
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

}
