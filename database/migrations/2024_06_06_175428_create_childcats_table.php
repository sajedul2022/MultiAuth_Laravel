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
        Schema::create('childcats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcat_id');
            $table->string('child_cat_name');
            $table->string('image')->nullable();
            $table->smallInteger('status')->default(1);
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childcats');
    }
};
