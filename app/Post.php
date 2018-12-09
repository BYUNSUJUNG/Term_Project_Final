<?php namespace App;
use Illuminate\Database\Elouquent\Model;

class Post extends Model {
    public static $rules = [
        'title'=> 'required',
        'body' => 'required'
    ];

    protected $filelable=['title','body','thumbnail'];
}