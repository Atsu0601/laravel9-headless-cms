<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // SoftDeletesトレイトを追加

    protected $fillable = [
        'title',
    ];

    protected $dates = [
        'deleted_at', // deleted_atカラムを追加
    ];
}
