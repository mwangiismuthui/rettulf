<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Music;
use App\Traits\UsesUUID;
class Category extends Model
{
    
    use SoftDeletes;
    use UsesUUID;
    public function music()
    {
        return $this->hasMany(Music::class);
    }
}
