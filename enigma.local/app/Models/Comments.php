<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'theme_id',
        'comment',
    ];
    public function themes() {
        return $this->belongsTo(Theme::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
