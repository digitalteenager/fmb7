<?php
use App\models\PostData;
use App\db\components\QueryBuilder;



$postData = new PostData(new QueryBuilder());
$row = $postData->getRow($_GET['id']);

if(isset($_POST['rePostBtn'])){
	array_pop($_POST);
	$postData->updatePost($_POST,$_GET['id']);
	header("Location: /");
}

require_once __DIR__."/../../views/posts/updatePost.view.php";
