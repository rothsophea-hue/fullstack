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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('origin')->nullable();
            $table->foreignID('department_id')->constrained('departments');

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        $table->string('email');
        $table->dropColumn('phone');
        $table->dropColumn('gender');
        $table->dropColumn('dob');
        $table->dropColumn('origin');
    }
};
