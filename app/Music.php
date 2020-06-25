<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\UsesUUID;
use App\Genre;
use App\Category;
class Music extends Model
{
    //

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use SoftDeletes;
    use UsesUUID;
}
