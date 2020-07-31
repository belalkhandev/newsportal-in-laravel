<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSubtype extends Model
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
        // slug create
        $this->attributes['slug'] = $this->slugify($value);
    }

    protected function slugify($value)
    {
        $slug = str_replace(' ', '-', strtolower($value));
        
        $slug = str_replace('.', '', $slug);

        $news_subtype_slug = NewsSubtype::where('slug', $slug)->get();

        if (count($news_subtype_slug) > 0) {
            $slug = $slug.'-'.$news_subtype_slug->count();
        }

        return $slug;
    }

    public function newsType()
    {
        return $this->belongsTo(NewsType::class, 'news_type_id');
    }
}
