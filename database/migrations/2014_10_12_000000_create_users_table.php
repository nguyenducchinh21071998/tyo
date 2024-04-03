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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_furigana_customer')->nullable();
            $table->string('name_full_customer')->nullable();
            $table->string('address_customer')->nullable();
            $table->string('mobile_customer')->nullable();
            $table->string('birthday_customer')->nullable();
            $table->string('marital_status_customer_customer')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('current_rent')->nullable();

            $table->string('name_full_school_customer')->nullable();
            $table->string('address_school_customer')->nullable();
            $table->string('mobile_school_customer')->nullable();
            $table->string('reson')->nullable();

            $table->string('name_full_job_customer')->nullable();
            $table->string('address_job_customer')->nullable();
            $table->string('mobile_job_customer')->nullable();
            $table->string('mobile_job_time_customer')->nullable();
            $table->string('mobile_job_department_customer')->nullable();
            $table->string('mobile_job_salary_customer')->nullable();
            $table->string('mobile_job_hours_from_to_customer')->nullable();

            $table->string('name_full_mother')->nullable();
            $table->string('address_mother')->nullable();
            $table->string('mobile_mother')->nullable();
            $table->string('birthday_mother')->nullable();

            $table->string('name_full_emergency')->nullable();
            $table->string('address_emergency')->nullable();
            $table->string('mobile_emergency')->nullable();
            $table->string('birthday_emergency')->nullable();
            $table->string('relationship')->nullable();

            $table->string('expected_contract_date')->nullable();
            $table->string('desired_move_in_date')->nullable();

            $table->string('gas_status')->nullable();
            $table->string('electricity_status')->nullable();
            $table->string('water_status')->nullable();
            
            $table->string('image')->nullable();

            $table->string('name_full')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
