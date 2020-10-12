<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayStackAPI extends Model
{
    use SoftDeletes;
    use UsesUUID;

    /**
     * @var mixed
     */
    private $public_key,$secret_key;
    protected $fillable = ['public_key','secret_key'];
}
