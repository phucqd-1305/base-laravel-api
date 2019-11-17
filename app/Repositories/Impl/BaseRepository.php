<?php

namespace App\Repositories\Impl;

abstract class BaseRepository
{
    abstract public function model();

    public function all()
    {
        return $this->model->all();
    }
    public function create($data)
    {
        return $this->model->create($data);
    }
    public function find($id)
    {
        return $this->model->find($id);
    }
    public function insert($data)
    {
        return $this->model->insert($data);
    }

    public function findWithTrashed($id)
    {
        return $this->model->withTrashed()->find($id);
    }
}
