<?php

use App\models\PostData;
use App\db\components\QueryBuilder;

$postData = new PostData(new QueryBuilder());
$postData->getAllPosts("pubdate");

echo 'я добавил новую строчку кода';
echo 'я добавил еще новую строчку кода';