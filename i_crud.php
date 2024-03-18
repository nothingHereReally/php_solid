<?php
namespace Model;

interface UserInterface
{
    public function findById($id);
    public function insert();
    public function update();
    public function delete();
}

