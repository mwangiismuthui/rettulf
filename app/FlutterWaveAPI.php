<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlutterWaveAPI extends Model
{
    use SoftDeletes;
    use UsesUUID;
    //
    /**
     * @var mixed
     */
    private $public_key,$secret_key,$encryption_key;
    protected $fillable = ['public_key', 'secret_key', 'encryption_key'];

}
