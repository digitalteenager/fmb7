<?php

use App\models\PostData;
use App\db\components\QueryBuilder;

if(isset($_POST['addPostBtn'])){
	array_pop($_POST);
	$postData = new PostData(new QueryBuilder());
	$postData->storePost($_POST);
	header("Location: /");
}
require_once __DIR__."/../../views/posts/insertPost.view.php";