<<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = ['tweet'];

    // 以下userメソッド追加

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}