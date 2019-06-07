<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function register($user_data) {
        $check_data_exsist = $this->select('*')->where('name', $user_data->name)->first();
        if ($check_data_exsist) {
            return 1;
        } else {
            $query = $this->insert($user_data);
            return 0;
        }
    }
    
    public function getuserdetails() {
        $get_user_details = $this->select('*')->get();
        if ($get_user_details) {
            return $get_user_details;
        } else {            
            return 0;
        }
    }

}
