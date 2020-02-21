<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level', 'session', 'qualification', 'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Users for the Programe.
     */
    public function users()
    {
        return $this->hasMany(\App\User::class);
    }


    /**
     * Get the Courses for the Programe.
     */
    public function courses()
    {
        return $this->hasMany(\App\Course::class);
    }
    
     public function students()
    {
        return $this->hasMany(\App\Student::class);
    }
}
