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
    Schema::create('tags', function (Blueprint $table) {
        $table->id();
        $table->string('tag_name')->notNullable();
        $table->string('slug')->notNullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('tags');
}
};
