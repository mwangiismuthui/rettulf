<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
use App\User;
class Balance extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use SoftDeletes;
    use UsesUUID;
}
