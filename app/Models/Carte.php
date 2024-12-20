<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom-carte',         // Nom de la carte
        'image-carte',       // Image de la carte
        'description-carte', // Description de la carte
        'user_id',           // Clé étrangère liée à l'utilisateur
    ];
    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }
}
