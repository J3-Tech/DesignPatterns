<?php

namespace ActiveRecord;

class DataAccess
{

    private static $handler;

    private static function getHandler()
    {
        if(!self::$handler){
            try {
                self::$handler=new \PDO("mysql:host=127.0.0.1;dbname=activerecord", 'root',null);
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$handler;
    }

    public static function exec($sql)
    {
        self::getHandler()->exec($sql);
    }

    public static function select($sql, array $params = null)
    {
        $handler=self::getHandler();
        if ($params) {
            $select=$handler->prepare($sql);
            $select->setFetchMode(\PDO::FETCH_OBJ);
            foreach ($params as $key => $param) {
                $select->bindParam(":{$key}",$param);
            }
            $select->execute();
        } else {
            $select=$handler->query($sql);
            $select->setFetchMode(\PDO::FETCH_OBJ);
        }

        return $select->fetchAll();
    }
}