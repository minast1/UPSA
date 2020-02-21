<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'indexnumber', 'programe_id',
    ];

    protected $guard = 'student';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'indexnumber' => 'integer',
        'remember_token' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    
    /**
     * Get the Programe for the User.
     */
    public function programe()
    {
        return $this->belongsTo(\App\Programe::class);
    }

}
