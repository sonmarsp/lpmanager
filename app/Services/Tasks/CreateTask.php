<?php

namespace App\Services\Tasks;

use App\Contracts\Tasks\TaskCreateInterface;
use App\Models\Task;

/**
 * 
 */

class CreateTask implements TaskCreateInterface
{


    /**
     * Получение набора данных и создания заявки
     * @param mixed $data - набор данных json | collection
     *
     * @return void - пока не определен
     */
    public function taskСollector(mixed $data){


        $this->createTask($data->get('nameTask'),
            $data->get('projectId'),
            $data->get('taskTopicId'),
            $data->get('taskGroupId'),
            $data->get('subgroupTasksId'),
            $data->get('ownerId'),
            $data->get('responsibleId'),
            $data->get('statusTask'),
        );
    }


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
        int $projectId = null,
        int $taskTopicId = null,
        int $taskGroupId = null,
        int $subgroupTasksId = null,
        int $ownerId = null,
        int $responsibleId = null,
        string $statusTask = null,
    )
    {

        $TaskCreate = Task::create([
            'name_task' => $nameTask,
            'project_id' => $projectId,
            'task_topic_id' => $taskTopicId,
            'task_group_id' => $taskGroupId,
            'subgroup_tasks_id' => $subgroupTasksId,
            'owner_id' => $ownerId,
            'responsible_id' => $responsibleId,
            'status_task' => $statusTask,
        ]);

        $TaskCreateId = $TaskCreate->id;

        //обработать возврат удача. неудача

        // здесь dispatch для истории
        //name::dispatch();

        return $TaskCreateId;


    } 

}