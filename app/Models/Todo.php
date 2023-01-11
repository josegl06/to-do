<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Todo extends Model
{
    use HasFactory;

    protected $fillable =[
       'todoType_id', 'userId', 'tittle', 'content'
    ];

    public function todoType(): HasOne{
        return $this->hasOne(TodoType::class);
    }

    public function user(): HasOne{
        return $this->hasOne(User::class);
    }
}
