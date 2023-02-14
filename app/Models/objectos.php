<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectos extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'complet'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
