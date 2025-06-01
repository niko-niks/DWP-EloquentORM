<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('file_name')->notNullable();
        $table->string('file_type')->notNullable();
        $table->integer('file_size')->nullable();
        $table->string('url')->notNullable();
        $table->timestamp('upload_date')->notNullable();
        $table->string('description')->notNullable();
    });
}

    /**
     * Reverse the migrations.
     */
public function down()
{
    Schema::dropIfExists('media');
}
};
