<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'content',
        'content_fr',
        'user_id'
    ];

    public function ArticleHasUser () 
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
