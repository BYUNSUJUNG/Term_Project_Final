<?php

use Illuminate\Database\Seeder;
use App\Board;
class boardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        /*
        //App\Board::create();
        // 위에 use을 했기에 이렇게 표현할 수가 있다.
        // 연관배열 형태로 넘겨준다.
        Board::create([
            'Title'=>'안녕';
            'Writer'=>'일지메';
            'Content'=>'안녕하세요';
        ]); */

        factory(App\Board::class, 100); // 100만들어주세요

    }
}
