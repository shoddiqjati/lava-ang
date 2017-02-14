<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('supplier', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('sp_name')->unique();
        $table->string('sp_email')->unique();
        $table->string('sp_contact');
        $table->string('sp_position');
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
      Schema::drop('supplier');
    }
}
