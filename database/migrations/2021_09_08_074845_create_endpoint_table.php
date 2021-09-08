<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndpointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endpoint', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("rol_id")->unsigned();
            $table->string("endpoint_name",100);
            $table->string("route",200);
            $table->foreign("rol_id")->references("id")->on("rol");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endpoint');
    }
}
