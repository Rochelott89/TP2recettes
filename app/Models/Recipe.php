<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;


   /**
    * Get the user that authored the recipe.

    *exo 4.2
    */
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }




}

