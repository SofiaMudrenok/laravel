<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('lesson');
            $table->decimal('mark');
            $table->timestamps();
        });
        DB::table('marks')->insert([
            [
                'lesson' => 'філософія',
                'mark' => 100,
            ],
            [
                'lesson' => 'математика',
                'mark' => 78,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
