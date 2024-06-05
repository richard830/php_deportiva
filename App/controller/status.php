<?php
class StatusController
{
    private $model;
    public function __construct()
    {
        $this->model = new StatusModel(ConnectionDB::getInstance());
    }

    public function getStatus()
    {
        $response = $this->model->getStatus();
        return $response;
    }
   
}
