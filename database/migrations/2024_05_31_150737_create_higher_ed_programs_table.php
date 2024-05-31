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
        Schema::create('higher_ed_programs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ihe_name');
            $table->string('program_title');
            $table->enum('program_type', ['type1', 'type2', 'type3']); // Define your specific types
            $table->enum('level_of_degree', ['Bachelor', 'Master', 'Doctorate']); // Example degrees
            $table->enum('format', ['Online', 'In-Person', 'Hybrid']);
            $table->boolean('alternate_route_to_certification');
            $table->enum('category_of_credentialing', ['Category1', 'Category2', 'Category3']); // Define your specific categories
            $table->string('url_for_program');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('higher_ed_programs');
    }
};
