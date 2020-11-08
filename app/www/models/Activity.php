<?php
class Activity extends Streamtool {

    protected $table = 'activity';

    public function user()
    {
        return $this->hasOne(User::class , 'id', 'user_id');
    }

    public function stream()
    {
        
        return $this->hasOne(Stream::class , 'id', 'stream_id');
    }
}
