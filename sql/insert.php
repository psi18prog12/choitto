<?php

try {
    $file = new SplFileObject('items.csv',"r");
    $file->setFlags(SplFileObject::READ_CSV);

    $pdo = new PDO("mysql:host=localhost;dbname=psi18prog12;charset=utf8mb4",'root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $stmt = $pdo->prepare('DROP TABLE IF EXISTS items;');
    $stmt->execute();
    $stmt = $pdo->prepare('CREATE TABLE items (
        id          INT             NOT NULL auto_increment PRIMARY KEY ,
        name        VARCHAR(255)                                        ,
        url         VARCHAR(1023)                                       ,
        img         VARCHAR(1023)                                       ,
        category    VARCHAR(255)                                        ,
        price       INT                                                 ,
        min_age     INT                                                 ,
        max_age     INT                                                 ,
        gender      INT                                                 ,
        rel         INT
    );');
    $stmt->execute();

    foreach ($file as $line) {
        if ($line[0] === '' || $line[0] === '名前') continue;
        $name     = $line[0];
        $url      = $line[1];
        $img      = $line[2];
        $category = $line[3];
        $price    = $line[4];
        $min_age  = $line[5];
        $max_age  = $line[6];
        $gender   = $line[7] === '男性' ? 0 : ($line[7] === '女性' ? 1 : 2);

        // 関係をバイナリ化
        $rel_list = ['家族', '友人', '恋人'];
        $rel_ary = explode('、', $line[8]);
        $rel = 0;
        if (is_array($rel_ary)) {
            foreach ($rel_ary as $v) {
                $rel += 2**array_search($v,$rel_list);
            }
        } else {
            $rel = 2**array_search($rel_ary,$rel_list);
        }
        $stmt = $pdo->prepare('INSERT INTO items (id,name,url,img,category,price,min_age,max_age,gender,rel) VALUES (NULL,?,?,?,?,?,?,?,?,?);');
        $stmt->bindParam(1, $name           , PDO::PARAM_STR);
        $stmt->bindParam(2, $url            , PDO::PARAM_STR);
        $stmt->bindParam(3, $img            , PDO::PARAM_STR);
        $stmt->bindParam(4, $category       , PDO::PARAM_STR);
        $stmt->bindValue(5, (int)$price     , PDO::PARAM_INT);
        $stmt->bindValue(6, (int)$min_age   , PDO::PARAM_INT);
        $stmt->bindValue(7, (int)$max_age   , PDO::PARAM_INT);
        $stmt->bindValue(8, (int)$gender    , PDO::PARAM_INT);
        $stmt->bindValue(9, (int)$rel       , PDO::PARAM_INT);
        $stmt->execute();
    }
}
catch (PDOException $e) {
    exit($e->getMessage());
}
