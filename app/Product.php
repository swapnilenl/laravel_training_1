<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ['name', 'user_id', 'price'];

    public function userDetails() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
