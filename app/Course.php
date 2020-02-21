<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Course extends Model implements HasMedia
{
    use HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'programe_id', 'user_id','semester'
    ];

    protected $appends = ['notes', 'assignments'] ; 

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
        'name' => 'string',
        'code' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the User for the Course.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


    /**
     * Get the Programe for the Course.
     */
    public function programe()
    {
        return $this->belongsTo(\App\Programe::class);
    }

    public function getNotesAttribute()
    {
        return  $this->attributes['notes'] = $this->getMedia('notes') ;
    }

     public function getAssignmentsAttribute()
    {
        return  $this->attributes['assignments'] = $this->getMedia('assignments') ;
    }

}
