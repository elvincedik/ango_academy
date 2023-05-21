<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['likes_count'];

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }

    public function likes()
    {
        return $this->hasMany(CommentLike::class);
    }

    public function getLikesCountAttribute()
{
    return $this->likes()->count();
}
}
