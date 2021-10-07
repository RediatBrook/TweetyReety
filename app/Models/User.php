<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    /*protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'avatar'
    ];*/
    protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatarAttribute($value){
        return asset($value ?: ("https://i.pravatar.cc/200?u=".$this->email));
        //return "https://i.pravatar.cc/200?u=".$this->email;
    }
    public function setPasswordAttribute($value){
        $this->attributes['password']= bcrypt($value);
    }
    public function timeline(){
        $ids = $this->follows()->pluck('id');
        $ids ->push($this->id);
        return  Tweet::whereIn('user_id',$ids)->latest()->withLikes()->get();
    }
    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
    public function path($append = ''){
        $path = route('profile',$this->username);
        return $append ? "{$path}/{$append}" : $path;
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }


}
