<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->notNullable();
            $table->string('file_type')->notNullable()->max(10);
            $table->integer('file_size')->nullable();
            $table->string('url')->notNullable();
            $table->timestamp('upload_date')->notNullable();
            $table->string('description')->Nullable();
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('media');
    }
}