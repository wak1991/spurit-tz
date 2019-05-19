<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text');
            $table->integer('task_id')->nullable();
            $table->timestamps();
        });

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 1
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 1
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 3
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 3
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 3
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 4
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 5
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 6
        ));

        DB::table('comments')->insert(array(
            'text' => 'comment',
            'task_id' => 6
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
