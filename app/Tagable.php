<?php

namespace gptv;

use Illuminate\Database\Eloquent\Model;

class Tagable extends Model
{
    protected  $fillable=[
        'name',
    ];
    /*
     * get all videos associated with this tag
     */
    public function videos(){
        return $this->belongsToMany('gptv\Tagable');
    }
}
