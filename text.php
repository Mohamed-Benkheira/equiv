<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('accepted_bac_requests', function (Blueprint $table) {
            $table->foreignId('bac_request_id')->nullable()->change();

            // Drop the existing foreign key constraint
            $table->dropForeign(['bac_request_id']);

            // Add the new foreign key constraint with onDelete('set null')
            $table->foreign('bac_request_id')
                ->references('id')
                ->on('bac_requests')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('accepted_bac_requests', function (Blueprint $table) {
            $table->foreignId('bac_request_id')->nullable(false)->change();

            // Drop the modified foreign key constraint
            $table->dropForeign(['bac_request_id']);

            // Re-add the original foreign key constraint
            $table->foreign('bac_request_id')
                ->references('id')
                ->on('bac_requests')
                ->onDelete('restrict');
        });
    }
};