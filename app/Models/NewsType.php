<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
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

        $news_type_slug = NewsType::where('slug', $slug)->get();

        if (count($news_type_slug) > 0) {
            $slug = $slug.'-'.$news_type_slug->count();
        }

        return $slug;
    }
}
