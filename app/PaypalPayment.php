<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
use App\Music;
use App\User;
class PaypalPayment extends Model
{
    //
    public function music()
    {
        return $this->belongsTo(Music::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use SoftDeletes;
    use UsesUUID;
}
