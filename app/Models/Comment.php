<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    
    protected $table = 'comments';
    protected $primaryKey  = 'id';

    protected $fillable = [
        'user_id',
        'post_id',
        'trade_item_id',
        'video_id',
        'incident_id',
        'comm_an_id',
        'comm_usr_an_id',
        'comm_comment_unique_an_id',
        'comm_comment',
        'comm_reply_an_id',
        'comm_is_reply',
        'comm_reply_parent_an_id',
        'comm_dislike',
        'comm_status',
        'comm_s_status',
        'comm_like',
        'comm_type',
        'comm_ui_is_public',
        'comm_type_id',
        'comm_ui_is_read',
        'comm_name',
        'comm_email',
    ];
}
