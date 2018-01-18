<?php

namespace App\CommonModels;

use Illuminate\Database\Eloquent\Model;
use App\DocumentModels\Document;

class Office extends Model
{
    public function documents(){
        return $this->hasMany(Document::class);
    }
}
