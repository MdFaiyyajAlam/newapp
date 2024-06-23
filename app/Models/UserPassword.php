<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserPassword extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'password',
        'user_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
