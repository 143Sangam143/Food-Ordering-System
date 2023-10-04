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
        Schema::create('police_reports', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('date_of_birth_bs')->nullable();
            $table->string('date_of_birth_ad')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('temporary_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('citizen_number')->nullable();
            $table->string('citizen_issued_location')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issued_location')->nullable();
            $table->string('national_id_number')->nullable();
            $table->string('national_id_issued_location')->nullable();
            
            $table->string('user_image')->nullable();
            $table->string('citizen_card_image')->nullable();
            $table->string('passport_card_mage')->nullable();
            $table->string('national_id_imagename')->nullable();
            
            $table->string('user_email')->nullable();
            $table->string('list_category')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->default('unchecked');
            $table->string('checked_date')->nullable();
            $table->string('dispatch')->nullable();
            $table->string('v_name')->nullable();
            $table->string('v_post')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('police_reports');
    }
};
