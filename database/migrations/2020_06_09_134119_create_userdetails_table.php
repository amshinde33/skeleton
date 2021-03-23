<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('personalphoneno');
            $table->string('workphoneno');
            $table->string('country');
            $table->string('orgnization');
            $table->string('website');
            $table->string('file');
            $table->string('aboutme');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('github');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_delete')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetails');
    }
}
