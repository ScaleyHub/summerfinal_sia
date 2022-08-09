<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $fillable = ['guitar_id','brand','pickup','body','neck','year'];

    public function guitar(){
        return $this->belongsTo('App\Model\Guitar');
    }
}
