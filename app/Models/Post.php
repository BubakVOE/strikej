<?php

namespace App\Models;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use HasFactory;

    protected $fillable=[
        'car',
        'type',
        'description',
        'cover',
    ];

    public function images(){
        
        return $this->hasMany(Galerie::class);
    }

}
