<?php

namespace App\models;
use App\db\components\QueryBuilder;

class PostData
{
    protected $db;

    public function __construct(QueryBuilder $db)
    {
        $this->db=$db;
    }
    //Получение всех постов
    public function getAllPosts($sort){
        $posts = $this->db->getAll("posts",$sort);
        require_once __DIR__."/../views/posts/index.view.php";
    }
    //Получение одной записи
    public function getRow($id){
        return $this->db->getRow("posts",$id);
    }
    //Добавление записи
    public function storePost($data){
        $temp["title"]=$data["title"];
        $temp["text"]=$data["text"];
        $temp["image"]=$data["image"];
        $temp["pubdate"]=date("Y-m-d-H-i-s");

        $this->db->store("posts",$temp);
        
    }
    //Удалить запись
    public function deletePost($id){
        $this->db->delete("posts",$id);
    }
    //Обновить
    public function updatePost($data,$search){

        $temp["title"]=$data["title"];
        $temp["text"]=$data["text"];
        $temp["image"]=$data["image"];
        $temp["pubdate"]=date("Y-m-d-H-i-s");

        $this->db->update("posts",$temp,$search);
    }
}