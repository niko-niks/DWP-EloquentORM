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
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->text('comment_content')->notNullable();
        $table->timestamp('comment_date')->notNullable();
        $table->string('reviewer_name')->notNullable();
        $table->string('reviewer_email')->notNullable();
        $table->boolean('is_hidden')->notNullable()->default(false);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('comments');
}
};
