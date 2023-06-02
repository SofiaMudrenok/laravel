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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('speciality');
            $table->decimal('course', 2, 1);
            $table->timestamps();
        });
        DB::table('students')->insert([
            [
                'name' => 'Шевчук П.П.',
                'speciality' => 'СА',
                'course' => 1,
            ],
            [
                'name' => 'Олейник О.О.',
                'speciality' => 'СА',
                'course' => 2,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
