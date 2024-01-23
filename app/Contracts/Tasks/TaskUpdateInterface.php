<?php

namespace App\Contracts\Tasks;


interface TaskUpdateInterface
{

    /**
    * Обновление задачи с базовыми атрибутами
     *@param int $taskId Ид задачи
    * @param string $nameTask Название задачи
    * @param int $projectId Ид проекта 
    * @param int $taskTopicId Ид тема задач 
    * @param int $taskGroupId Ид группа задач 
    * @param int $subgroupTasksId Ид подгруппа задач
    * @param int $ownerId Создатель заявки
    * @param int $responsibleId Текущий ответственный
    * @param string $statusTask Текущий статус
    */
    public function updateTask(int $taskId,
        string $nameTask,
        int $projectId,
        int $taskTopicId,
        int $taskGroupId,
        int $subgroupTasksId,
        int $ownerId,
        int $responsibleId,
        string $statusTask,
    ); 

    /**
     * Получение набора данных и создания заявки
     * @param mixed $data - набор данных json | collection
     *
     * @return void - пока не определен
     */
    public function taskСollector(mixed $data);



}