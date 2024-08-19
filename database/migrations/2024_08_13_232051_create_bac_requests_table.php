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
        Schema::create('bac_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade');
            $table->string('school_name');
            $table->date('certificate_date');
            $table->string('id_card_path');
            $table->string('certificate_file_path');
            $table->string('degrees_paper_path');
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
        Schema::dropIfExists('bac_requests');
    }
};
