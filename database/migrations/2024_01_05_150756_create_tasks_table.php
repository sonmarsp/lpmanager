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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id()->comment('Ид задачи');
            $table->string('name_task')->comment('Название задачи');
            $table->integer('project_id')->nullable()->comment('Ид проекта');
            $table->integer('task_topic_id')->nullable()->comment('Ид тема задач');
            $table->integer('task_group_id')->nullable()->comment('Ид группа задач');
            $table->integer('subgroup_tasks_id')->nullable()->comment('Ид подгруппа задач');
            $table->integer('owner_id')->nullable()->comment('Создатель заявки');
            $table->integer('responsible_id')->nullable()->comment('Текущий ответственный');
            $table->string('status_task')->comment('Текущий статус');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
