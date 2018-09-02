<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookTitle');
            $table->longText('shortSumary')->nullable();
            $table->integer('isban')->nullable();
            $table->integer('availability')->default(1);
            $table->string('category');
            $table->string('subject');
            $table->string('edition')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->char('shelfId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
