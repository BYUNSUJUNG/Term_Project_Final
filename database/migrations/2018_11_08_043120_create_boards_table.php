<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // 마이그레이트 를 수행했을 때, 테이블 생성
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id'); // 칼럼을 만들어줌/ 폴링이 id가 아니면 나중에 따로 설정해야함
            
            $table->string('Writer',20); 
            $table->string('Title',60);
            $table->text('Content');
            $table->timestamp('Regtime');
            $table->integer('Hits')->unsigned()->default(0);
            /* $table->timestamp('date'); // 이거 만들고 싶으면 s 때고 만들면 되는거임
            $table->timestamps(); // s(여러개이겠지) => create_at, update_at를 만들어줌*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // 롤백할 때, 삭제
    {
        Schema::dropIfExists('boards');
    }
}
