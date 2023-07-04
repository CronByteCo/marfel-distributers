<?php 

namespace App\Repositories;

abstract class AbstractEloquentRepository
{
    protected $model;
    
    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}