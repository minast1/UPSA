<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programes', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->enum('level', [100,200,300,400]);
            $table->enum('session',['morning', 'evening'] );
            $table->enum('qualification',['degree','diploma'] );
            $table->enum('code', ['1MD','1ED','2MD','2ED','3MD','3ED','4MD','4ED']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programes');
    }
}
