<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:01 AM
 */
namespace Kibb\Base;

interface BaseSchool
{
    public function create($data = []);

    public function update($data = []);

    public function all($columns = ['*'], string $orderBy = 'id', string $sortBy = 'asc');

    public function find(int $id);

    public function findOneOrFail(int $id);

    public function findBy($data = []);
    public function findOneBy($data = []);

    public function findOneByOrFail($data = []);

    public function paginateResults($data = [], int $perPage = 20);

    public function delete(int $id);
}