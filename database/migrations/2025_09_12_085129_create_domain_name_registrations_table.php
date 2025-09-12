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
        Schema::create('domain_name_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->unique();

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');

            $table->unsignedBigInteger('domain_name_registration_plan_id');
            $table->foreign('domain_name_registration_plan_id', 'dnr_plan_id_fk')
                ->references('id')->on('domain_name_registration_plans')
                ->onDelete('restrict');

            $table->dateTime('registration_date');
            $table->dateTime('renewal_date');
            $table->dateTime('expiration_date')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_name_registrations');
    }
};
