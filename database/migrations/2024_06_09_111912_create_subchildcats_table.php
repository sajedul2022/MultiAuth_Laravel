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
        Schema::create('subchildcats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('childcat_id');
            $table->string('sub_child_cat_name');
            $table->string('image')->nullable();
            $table->smallInteger('status')->default(1);
            $table->foreign('childcat_id')->references('id')->on('childcats')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subchildcats');
    }
};
