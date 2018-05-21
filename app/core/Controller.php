<?php
/**
 * Created by PhpStorm.
 * User: yaroslav.lvivskyi
 * Date: 5/21/2018
 * Time: 11:16 AM
 */

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once  '../app/views/' . $view . '.php';
    }
}