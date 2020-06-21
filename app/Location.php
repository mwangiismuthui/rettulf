<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
class Location extends Model
{
    
    use SoftDeletes;
    use UsesUUID;
}
