<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'prix', 'image'
    ];

    /**
     * Get the panier for the produit.
     */
    public function panier()
    {
        return $this->hasMany(Panier::class);
    }
}
