<?php
/**
 * Created by PhpStorm.
 * User: yaroslav.lvivskyi
 * Date: 5/21/2018
 * Time: 1:07 PM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    protected $fillable = ['username', 'email'];
}