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
        Schema::table('todo', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
            $table->uuid('created_by')->nullable()->after('updated_at');
            $table->uuid('updated_by')->nullable()->after('updated_at');
            $table->uuid('deleted_by')->nullable()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todo', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
            $table->dropColumn('deleted_by');
        });
    }
};
