<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations new.
     */
    public function up(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->renameColumn('birthdate', 'birthday');
        });
    }

    /**
     * Reverse the migrations new.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->renameColumn('birthday', 'birthdate');
        });
    }
};
