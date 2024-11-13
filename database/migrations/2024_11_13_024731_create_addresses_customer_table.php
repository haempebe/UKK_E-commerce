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
        Schema::create('addresses_customer', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penerima');
            $table->string('phone_penerima');
            $table->text('address');
            $table->text('detail_address');
            $table->text('tambahan')->nullable();
            $table->foreignId('customer_id')->index()->constrained('customers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses_customer');
    }
};
