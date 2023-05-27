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
        Schema::create('svg_maps', function (Blueprint $table) {
            $table->increments('sm_id');
            $table->text('sm_description');
            $table->longText('sm_markup');
            $table->timestamp('sm_last_updated')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svg_maps');
    }
};
