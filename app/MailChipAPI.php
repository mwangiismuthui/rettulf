<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailChipAPI extends Model
{
    use SoftDeletes;
    use UsesUUID;
    //
    /**
     * @var mixed
     */
    private $list_id,$api_key;
    protected $fillable = ['api_key','list_id'];
}
