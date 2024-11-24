<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image',
    ];
    public function getFormattedDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('Y-m-d') : 'No Date';
    }
    
    
}
