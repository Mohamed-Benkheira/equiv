<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('license_requests', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('applicant_id')->constrained('applicants'); // Foreign key to the applicants table
            $table->string('school_name');
            $table->date('certificate_date');
            $table->string('id_card_path');
            $table->string('bac_certificate_file_path');
            $table->string('certificate_for_equivalence_file_path');
            $table->string('statement_of_marks_or_certificate_appendix');
            $table->string('status')->default('pending');
            $table->boolean('info_accuracy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('license_requests');
    }
};