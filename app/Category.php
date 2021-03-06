<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    public function companies() {
        return $this->belongsTo(Company::class);
      }


      public function products() {
        return $this->hasMany(Product::class);
      }
}

