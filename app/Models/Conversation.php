<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $table = 'conversations';
    protected $primaryKey  = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'from_id',
        'item_id',
        'conv_an_id',
        'group_ids',
        'title',
        'content',
        'op1',
        'deleted_by_user_id',
        'deleted_by_from_id',
        'deleted_by_group_ids',
        'status',
        'type',
        'created_at',
        'updated_at',
    ];
}
