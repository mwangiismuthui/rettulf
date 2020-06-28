<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
class TemporaryTransaction extends Model
{
    //

    use SoftDeletes;
    use UsesUUID;
}
