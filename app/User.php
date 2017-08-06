<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password','gender', 'age', 'address', 'phone', 'email_token', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    public function fullName(){
        return $this->firstname .' '. $this->lastname;
    }

    public function admin()
    {
        if ($this->admin == 1){
            return true;
        }
    }

    public function paid()
    {
        if ($this->paid == 1){
            return true;
        }
    }
}
