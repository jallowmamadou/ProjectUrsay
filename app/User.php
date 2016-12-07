<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function findByEmailOrCreate($data)
    {
        $user = $this->firstOrCreate([
            'name' => $data->name,
            'email' => $data->email,
        ]);

        if($user->avatar != $data->avatar) {
            $user->avatar = $data->avatar;
            $user->save();
        }

        return $user;
    }
}
