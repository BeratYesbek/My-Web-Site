<?php

interface IEntityRepository
{
    function add(IEntity $entity): IResult;

    function update(IEntity $entity): IResult;

    function delete(IEntity $entity): IResult;

    function getById(int $id): IDataResult;

    function getAll(): IDataResult;

}