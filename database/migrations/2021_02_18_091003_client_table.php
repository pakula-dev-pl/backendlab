<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->id();

            $table->string('name', 190);
            $table->unsignedBigInteger('external_id');
            $table->string('city, 190');
            $table->string('street',190);
            $table->string('country', 100);
            $table->string('street_number', 20);
            $table->string('postal_code', 6);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
