<?php 

namespace App\Repositories;

abstract class AbstractEloquentRepository
{
    protected $model;
    
    public function all()
    {
        $this->model->all();
    }

    public function find($id)
    {
        $this->model->find($id);
    }
}