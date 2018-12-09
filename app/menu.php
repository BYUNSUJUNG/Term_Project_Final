<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $filelable = ['menu_board','writer','title','file','price','content'];
    use Searchable;
    public function searchableAs()
    {
        return 'menu_index';
    }

/*
select문 대신 "App::Test::get()"함수 사용
insert문 대신 "App::Test::save()"함수 사용
[출처] laravel은 엘로퀀트 ORM 제공 (JAVA, JAVASCRIPT 개발자 (자바, 자바스크립트)) |작성자 박성환

*/

}
