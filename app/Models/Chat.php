<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';
    protected $primaryKey  = 'id';

    protected $fillable = [
        'init_user_id',
        'end_user_id',
        'conversation_id',
        'chat_an_id',
        'title',
        'content',
        'attachment',
        'op1',
        'op2',
        'seen_by_other_user',
        'created_at',
        'updated_at'
    ];
}
