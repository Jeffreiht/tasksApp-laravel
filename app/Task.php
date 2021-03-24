<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'description', 'user_id'
    ];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetExcerptAttribute(){
        return substr($this->description, 0, 140);
    }
}
