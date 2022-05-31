<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table =('user_blogs');
    protected $fillable =([
        'username',
        'blogname',
        'email',
        'contact_no',
        'description',
        'file',
    ]);
}
