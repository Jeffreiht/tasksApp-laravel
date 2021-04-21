<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'description', 'user_id'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->description, 0, 140);
    }

    public function scopeTitle($query, $title)
    {
        if ($title)
            return $query->where('title', 'LIKE', "%$title%");
    }

    public function scopeDescription($query, $description)
    {
        if ($description)
            return $query->where('description', 'LIKE', "%$description%");
    }

    public function scopeUser($query, $user)
    {
        
        if ($user)
            $query->whereHas('user', function ($q)use($user){
                $q->where('name', 'LIKE', '%'.$user.'%');
            });
    }
}
