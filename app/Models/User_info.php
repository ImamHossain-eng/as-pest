<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'profession',
        'image',
        'address',
        'number'
    ];
    public function user(){
        $this->belongTo(User::class);
    }
}
