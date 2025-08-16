<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('seller_payment_apis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_extra_id')->constrained('seller_extra_infos')->cascadeOnDelete();
            $table->foreignId('provider_id')->constrained('payment_providers')->cascadeOnDelete();
            $table->string('api_key');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seller_payment_apis');
    }
};
