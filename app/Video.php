<?php

namespace gptv;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Video extends Model
{
    use Taggable;
    protected $table = 'videos';
    //
    protected $fillable = [
        'title','youtubelink','image','description',
    ];
    /*
     * get the tags associated with the given video
     */
    public function tagables(){
        return $this->belongsToMany('gptv\Tagable')->withTimestamps();
    }
}
