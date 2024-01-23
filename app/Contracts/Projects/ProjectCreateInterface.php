<?php

namespace App\Contracts\Projects;

/**
 * Интерфейс для создания проектов
 */

interface ProjectCreateInterface 
{
    
    /**
     * Получение набора данных для создания
     * @param mixed $data набор данных json | collection
     *
     * @return void пока не определен
     */
    public function projectСollector(mixed $data);
    
    
    
    /**
    * Создание проекта с базовыми атрибутами
    * @param string $projectName Название проекта
    * @param string $projectShortName Короткое имя для коммитов
    * @param string $projectDescription Описание проекта
    */
    public function createProject(string $projectName,
        string $projectShortName,
        string $projectDescription, 
    ); 





}