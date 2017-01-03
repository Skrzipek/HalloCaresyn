<?php
/**
 * Created by PhpStorm.
 * User: oskrzipek
 * Date: 03.01.17
 * Time: 16:24
 */

class CaresynLogger
{

    private static  $_instance  = null;

    private         $serverip   = "78.46.67.169";

    private         $serverport = "23234";

    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * clone
     *
     * Kopieren der Instanz von aussen ebenfalls verbieten
     */
    protected function __clone() {}

    /**
     * constructor
     *
     * externe Instanzierung verbieten
     */
    protected function __construct() {}

}