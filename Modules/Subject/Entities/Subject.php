<?php

namespace Modules\Subject\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'theme_id'];
    
    protected static function newFactory()
    {
        return \Modules\Subject\Database\factories\SubjectFactory::new();
    }
}
