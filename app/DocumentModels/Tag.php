<?php

namespace App\DocumentModels;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function documents(){
        return $this->belongsToMany(Document::class);
    }
}
