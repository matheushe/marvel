<?php

namespace Models;

class Marvel
{
    public $dados = [];

    public function __construct()
    {
        $this->getResources();
    }

    public function findAll()
    {
        return json_encode($this->dados);
    }

    public function findById($id)
    {
        foreach ($this->dados as $key => $value) {
            if ($value['id'] == $id) {
                return $value;
            }
        }
        return null;
    }

    public function getResources()
    {
        $result = file_get_contents('resources\herois.json');
        return $this->dados = json_decode($result, true);
    }

}
