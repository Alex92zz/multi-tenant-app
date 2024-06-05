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
    Schema::create('employee_leave_requests', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('full_name');
        $table->string('email');
        $table->string('contact_number');
        $table->string('leave_type');
        $table->date('from_date');
        $table->date('to_date');
        $table->integer('total_days');
        $table->text('comments')->nullable();
        $table->mediumText('signature'); // Assuming the signature is stored as a file path or filename
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_leave_requests');
    }
};
