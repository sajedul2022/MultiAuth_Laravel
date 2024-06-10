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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->nullable();
            $table->string('package_price')->nullable();
            $table->string('package_unit')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->string('package_duration')->nullable();
            $table->string('package_entry_by')->nullable();
            $table->string('package_updated_by')->nullable();
            $table->smallInteger('status')->default(1);
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
