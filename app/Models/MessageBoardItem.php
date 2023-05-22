<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageBoardItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'message', 'status', 'name'];
}
