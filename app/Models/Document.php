<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'users_id',
        'doc_path'
    ];

    public function DocumentHasUser () 
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
}
