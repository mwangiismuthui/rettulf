<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
use App\User;
class Withdrawal extends Model
{
    //
public function users()
{
return $this->belongsTo(User::class);
}
    use SoftDeletes;
    use UsesUUID;
}
