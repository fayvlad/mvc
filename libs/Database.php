<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 11:49
 */
class Database extends PDO
{
    public function __construct()
    {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USER, DB_PASS );
    }
}
