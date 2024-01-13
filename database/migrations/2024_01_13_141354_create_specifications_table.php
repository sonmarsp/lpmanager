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
        Schema::create('specifications', function (Blueprint $table) {
            $table->id()->comment('Ид описания');
            $table->integer('task_id')->comment('Ид заявки');
            $table->string('short_task')->nullable()->comment('Краткое описание задачи');
            $table->text('specification_task')->nullable()->comment('Описание, спецификация задачи');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specifications');
    }
};
