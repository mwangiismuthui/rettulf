<?php

namespace App;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailMessage extends Model
{
    use SoftDeletes;
    use UsesUUID;
    //
    /**
     * @var mixed
     */
    private $company_name,$from_email,$message,$subject,$identifier;
    protected $fillable = ['company_name','from_email','message','subject','identifier'];
}
