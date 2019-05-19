<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->integer('status_id')->nullable();
            $table->timestamps();
        });

        DB::table('tasks')->insert(array(
        'title' => 'php',
        'description' => 'php description',
        'status_id' => 1
        ));

        DB::table('tasks')->insert(array(
            'title' => 'laravel',
            'description' => 'laravel description',
            'status_id' => 1
        ));

        DB::table('tasks')->insert(array(
            'title' => 'mysql',
            'description' => 'mysql description',
            'status_id' => 2
        ));

        DB::table('tasks')->insert(array(
            'title' => 'vue',
            'description' => 'vue description',
            'status_id' => 3
        ));

        DB::table('tasks')->insert(array(
            'title' => 'data',
            'description' => 'data description',
            'status_id' => 3
        ));

        DB::table('tasks')->insert(array(
            'title' => 'empty',
            'description' => 'empty description',
            'status_id' => 3
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
