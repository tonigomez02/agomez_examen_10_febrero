<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ["user_id", "title", "summary", "description", "access", "expired", "commentable", "date_publication"];
    protected $casts = [
        'expired' => 'boolean',
        'commentable' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
