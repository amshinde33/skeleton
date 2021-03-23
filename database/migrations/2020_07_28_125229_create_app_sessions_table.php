<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('app_id');
            $table->string('device_id');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_delete')->default(false);
           $table->timestamp('first_session')->useCurrent();
           $table->timestamp('recent_session')->useCurrent();
         //  $table->timestamp('updated_at')->useCurrent();

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_sessions');
    }
}
