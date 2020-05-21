<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagedServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managed_servers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("auth_mode");
            $table->string("public_key", 500)->nullable();
            $table->string("private_key", 500)->nullable();
            $table->json("stack_id_set");
            $table->integer("os_id");
            $table->float("charges_monthly");
            $table->string("ip")->unique();
            $table->string("root_password")->nullable();
            $table->string("status");
            $table->unsignedBigInteger('serverlized_server_id');
            $table->foreign('serverlized_server_id')->references('id')->on('serverlized_servers');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::dropIfExists('managed_servers');
    }
}
