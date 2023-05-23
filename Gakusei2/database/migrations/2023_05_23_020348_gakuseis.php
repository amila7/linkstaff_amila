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
        Schema::create('gakuseis', function (Blueprint $table) {
            $table->id();
            $table->String('Number');
            $table->String('Name');
            $table->date('DateOfBirth');
            $table->string('Address')->nullable();
            $table->String('PhoneNB');
            $table->string('email')->unique();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
