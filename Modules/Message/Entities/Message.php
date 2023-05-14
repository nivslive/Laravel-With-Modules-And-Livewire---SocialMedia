<?php

namespace Modules\Message\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['text'];
    
    protected static function newFactory()
    {
        return \Modules\Message\Database\factories\MessageFactory::new();
    }
}
