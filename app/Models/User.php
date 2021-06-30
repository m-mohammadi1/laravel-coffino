<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }

    public function purchasedServices()
    {
        return $this->hasMany(PurchasedService::class, 'user_id');
    }


    public function getAvatarAttribute()
    {
        return !isset($this->attributes['avatar'])
            ? asset('assets/media/users/blank.png')
            : 'storage/avatars/' . $this->attributes['avatar'];
    }

    public function getAvatarStoragePathAttribute()
    {
        return 'public/avatars/' . $this->attributes['avatar'];
    }


    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}

