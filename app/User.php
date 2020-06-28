<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
use App\Music;
use App\Location;
use App\Withdrawal;
use App\Balance;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    use SoftDeletes;
    use UsesUUID;
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
    public function music()
    {
        return $this->hasMany(Music::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }
    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }
}
