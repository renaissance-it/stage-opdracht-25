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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();

            $table->string('domain_name')->unique();

            $table->string('status')->default('active'); // active, suspended, cancelled
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedTinyInteger('invoiceInterval'); // in months

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');

            $table->unsignedBigInteger('service_plan_id');
            $table->foreign('service_plan_id')
                ->references('id')->on('service_plans')
                ->onDelete('restrict');

            $table->unsignedBigInteger('server_id')->nullable();
            $table->foreign('server_id')
                ->references('id')->on('servers')
                ->onDelete('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
