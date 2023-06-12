<?php

namespace Gohari\RepositoryPattern;

interface BaseRepositoryInterface
{
    public function getAll();

    public function query();

    public function findById($id);

    public function insertData($data);

    public function updateItem($identity, $data);

    public function deleteData($identity);
}
