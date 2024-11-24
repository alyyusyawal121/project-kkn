<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'content', 'images', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'images' => 'array',
    ];

    /**
     * Get the formatted creation date of the program.
     *
     * @return string
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('Y-m-d') : 'No Date';
    }
}
