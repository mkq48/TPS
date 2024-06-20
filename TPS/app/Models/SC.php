<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SC extends Model
{
    use HasFactory;

    protected $primaryKey = 'Cinema_ID';

    public $timestamps = false;

    protected $fillable = [
        'Cinema_ID',
        'Cinema_Name',
        'Film_Name',
        'SC',
        'DOS',
        'Price',
    ];

    
    public function sc()
    {
        return $this->hasMany(SC::class);
    }
}
