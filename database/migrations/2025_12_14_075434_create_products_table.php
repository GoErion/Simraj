<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('name',100);
            $table->text('description');
            $table->text('usage');
            $table->boolean('active')->default(true);
            $table->decimal('price',10,2)->unsigned();
            $table->string('file_path');
            $table->string('file_hash');
            $table->integer('file_size')->unsigned();
            $table->unique(['user_id', 'file_hash']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
