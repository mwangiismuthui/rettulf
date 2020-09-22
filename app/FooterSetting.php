<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUUID;
class FooterSetting extends Model
{
    use UsesUUID;
    //
    /**
     * @var mixed
     */
    private $about, $email, $phone,$contact,$twitter,$facebook,$instagram,$linkedin;

}
