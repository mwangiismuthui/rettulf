<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Music;
use App\User;
class FlutterWavePayment extends Model
{
    use SoftDeletes;
    use UsesUUID;

    public function music()
    {
        return $this->belongsTo(Music::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
