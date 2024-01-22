<?php

namespace App\Contracts\Tasks;

/**
 * Интерфейс для создания задач
 */

interface TaskCreateInterface
{

   /**
    * Создание тикета с базовыми атрибутами
    * @param string $nameTask Название задачи
    * @param int $projectId Ид проекта 
    * @param int $taskTopicId Ид тема задач 
    * @param int $taskGroupId Ид группа задач 
    * @param int $subgroupTasksId Ид подгруппа задач
    * @param int $ownerId Создатель заявки
    * @param int $responsibleId Текущий ответственный
    * @param string $statusTask Текущий статус
    */
    public function createTask(string $nameTask,
        int $projectId,
        int $taskTopicId,
        int $taskGroupId,
        int $subgroupTasksId,
        int $ownerId,
        int $responsibleId,
        string $statusTask,
    ); 


}

