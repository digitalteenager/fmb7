<?php
namespace  App\db\components;
use PDO;
use PDOException;
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['db_name']}",
                $config['db_user'],
                $config['db_pass'],
                $config['option']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
