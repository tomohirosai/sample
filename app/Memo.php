<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $guarded = [];
    
    
    public function scopeTagFilter($query, ?string $tag)
    {
        if (!is_null($tag)) {
            return $query->where('tag', $tag);
    }
        return $query;
    }
    
    public function scopeSearchTitle($query, ?string $word)
    {
        if (!is_null($word)) {
            return $query->where('title', 'like', '%' . $word . '%');
        }
        return $query;
    }
}


