<?php

namespace App\Services\Projects;

use App\Contracts\Projects\ProjectCreateInterface;
use App\Models\Project;


class CreateProject implements ProjectCreateInterface
{

    
    /**
     * Получение набора данных и создания заявки
     * @param mixed $data - набор данных json | collection
     *
     * @return void - пока не определен
     */
    public function projectСollector(mixed $data){


        $this->createProject($data->get('projectName'),
            $data->get('projectShortName'),
            $data->get('projectDescription'),
        );
    }
 
    /**
    * Создание проекта с базовыми атрибутами
    * @param string $projectName Название проекта
    * @param string $projectShortName Короткое имя для коммитов
    * @param string $projectDescription Описание проекта
    */
    public function createProject(string $projectName, string $projectShortName, string $projectDescription)
    {

        $ProjectCreate = Project::create([
            'project' => $projectName,
            'short_name_project' => $projectShortName,
            'description_project' => $projectDescription,
            
        ]);

        $ProjectCreateId = $ProjectCreate->id;

        

        return $ProjectCreateId;
    } 


    
}