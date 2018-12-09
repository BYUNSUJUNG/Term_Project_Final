<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertising extends Model // 대분자로 표시하는게 관례다
{
    protected $filelable = ['menu','customer','title','file','content'];
}
