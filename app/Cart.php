<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $filelable = ['menu_board','title','file','price','count'];
   
   /* use Searchable;
    public function searchableAs()
    {
        return 'cart_index';
    }*/
}
