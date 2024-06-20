<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $primaryKey = 'Film_ID';

    public $timestamps = false;

    protected $fillable = [
        'Film_ID',
        'Film_Name',
        'Description',
        'Age',
        'Image_url',
        'Trailler_url',
        'Film_time',
        'Language',
        'DOS',
        'DOE',
        'Category',
        'Actor',
        'Director',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
