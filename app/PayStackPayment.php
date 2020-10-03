<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayStackPayment extends Model
{
    use SoftDeletes;
    use UsesUUID;
}
