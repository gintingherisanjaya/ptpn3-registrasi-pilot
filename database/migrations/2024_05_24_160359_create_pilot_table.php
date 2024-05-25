<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilot', function (Blueprint $table) {
            $table->string('id', 50)->unique();
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('nik_sap', 10);
            $table->string('jabatan', 50);
            $table->string('no_hp', 20)->unique();
            $table->string('username', 30)->unique();
            $table->string('password', 100);
            $table->string('kode_kebun', 6);
            $table->string('afdeling', 7);
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
        Schema::dropIfExists('pilot');
    }
}
