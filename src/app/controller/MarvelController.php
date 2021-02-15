<?php

namespace Controllers;

use Models\Marvel;

class MarvelController
{

    public static function index()
    {
        echo (new Marvel)->findAll();
    }

    public static function show($id)
    {
        echo json_encode((new Marvel)->findById($id) ?? []);
    }

    public static function getComics($id)
    {
        echo json_encode((new Marvel)->findById($id)['comics']) ?? null;
    }

    public static function getEvents($id)
    {
        echo json_encode((new Marvel)->findById($id)['events']) ?? null;
    }

    public static function getSeries($id)
    {
        echo json_encode((new Marvel)->findById($id)['series']) ?? null;
    }

    public static function getStories($id)
    {
        echo json_encode((new Marvel)->findById($id)['stories']) ?? null;
    }
}
