<?php
namespace App\db\components;

//для создания запросов для базы данных SQL
class QueryBuilder
{
    protected $pdo;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../../../config.php';
        $this->pdo = connection::make($config);
    }

    //Получение всех записей
    public function getAll($table,$sort)
    {
        $sql = "SELECT * FROM {$table} ORDER BY $sort desc ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    //Получение одной записиси
    public function getRow($table, $id, $search = "id")
    {
        $sql = "SELECT * FROM {$table} WHERE {$search}=:x";
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute(["x" => $id])) {
            return $stmt->fetch();
        };
        return null;
    }

    //Добавление записи
    public function store($table, $data)
    {
        $f = array_keys($data);
        $fields = implode(",", $f);
        $values = implode(", :", $f);
        $sql = "INSERT INTO $table($fields) VALUES (:$values)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    //Обновление записи
    public function update($table, $data, $search)
    {
        $fields = "";
        foreach ($data as $key => $v) {
            if ($key != $search) {
                $fields .=$key."=:".$key.", ";
                $fields_end = mb_substr($fields,0,-2);
            }
        }
            $sql = "UPDATE $table SET $fields_end WHERE id=$search";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($data);
        
        
    }
    //Удаление записи
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id =:id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            "id"=>$id
        ]);
    }

}