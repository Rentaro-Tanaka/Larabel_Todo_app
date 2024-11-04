<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // 一括代入を許可するプロパティを指定
    protected $fillable = ['title', 'completed'];
}
