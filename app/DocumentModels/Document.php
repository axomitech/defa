<?php

namespace App\DocumentModels;

use Illuminate\Database\Eloquent\Model;
use App\CommonModels\Office;

class Document extends Model
{
    public function office(){
        return $this->belongsTo(Office::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
