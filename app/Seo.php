<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\UsesUUID;
use Illuminate\Database\Eloquent\SoftDeletes;
class Seo extends Model
{
    //


    use UsesUUID;
    use SoftDeletes;
    // public function product(){
    //     return $this->belongsTo(Product::class);
    // }
}
