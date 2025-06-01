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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title')->notNullable();
        $table->text('content')->notNullable();
        $table->string('slug')->notNullable();
        $table->timestamp('publication_date')->nullable();
        $table->timestamp('last_modified_date')->nullable();
        $table->string('status')->notNullable()->comment('D - Draft, P - Published, I - Inactive');
        $table->string('featured_image_url')->notNullable();
        $table->integer('views_count')->notNullable()->default(0);
    });
}

    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::dropIfExists('posts');
}
};
