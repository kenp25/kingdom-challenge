<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = [
        'day', 'name', 'video', 'audio'
    ];

    public function hasBeenSent()
    {
        if ($this->sent == 1){
            return true;
        }

        return false;
    }

}
