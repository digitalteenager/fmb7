<?php
    return[
        "host"=>'127.0.0.1',
        "db_name"=>'blog_db',
        "db_user"=>'root',
        "db_pass"=>'',
        "option"=>[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]
    ];
// href="../update.view.php?id=<?=$row->id?>"