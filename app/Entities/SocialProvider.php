<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //
    protected $table = 'social_providers';

    protected $fillable = [
        'id_provider', 'provider',
    ];


    public function user(){

        return $this->hasOne('App\Entities\User', 'id', 'id_user');
    }
}
