<?php
use App\models\PostData;
use App\db\components\QueryBuilder;

$postData = new PostData(new QueryBuilder());
$postData->deletePost($_GET['id']);


// echo $_GET['id'];
header('Location: /');

