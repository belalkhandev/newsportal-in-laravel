<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function newsType()
    {
        return $this->belongsTo(NewsType::class, 'news_type_id');
    }

    public function newsSubtype()
    {
        return $this->belongsTo(NewsSubtype::class, 'news_subtype_id');
    }
}
