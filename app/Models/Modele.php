<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'user_id'
    ];
    public function seller(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
