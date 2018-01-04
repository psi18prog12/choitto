<?php

function _getData($where)
{
	try {
        $gender = $where['gender'];
        $rel = $where['rel'];

        // genderとrelだけSQLクエリで絞る
        $pdo = new PDO("mysql:host=localhost;dbname=psi18prog12;charset=utf8mb4",'root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $stmt = $pdo->prepare('SELECT * FROM items WHERE (gender = ? OR gender = 2) AND (rel & ?)');

        $stmt->bindValue(1, (int)$gender, PDO::PARAM_INT);
        $stmt->bindValue(2, 2**(int)$rel, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $age = $where['age'];
        $budget = $where['budget'];

        $ret = [];

        // ageとpriceはPHPで絞る
        foreach ($data as $v) {
            if ($age['max'] != 0 && $age['max'] < $v['min_age']) continue;
            if ($v['max_age'] != 0 && $age['min'] > $v['max_age']) continue;
            if ($budget['min'] >= $v['price'] || $budget['max'] <= $v['price']) continue;
            $ret[] = $v;
        }

        return $ret;
	}
	catch (PDOException $e) {
        exit($e->getMessage());
	}
}

header('Content-Type: application/json');

try {
    if (
        isset($_POST['gender'])
        && isset($_POST['rel'])
        && isset($_POST['age'])
        && isset($_POST['budget'])
    ){
        // 検索条件
        $where = [
            'gender' => $_POST['gender'],
            'rel' => $_POST['rel'],
            'age' => $_POST['age'],
            'budget' => $_POST['budget']
        ];

        // 結果群を取得
        $data = array_map(function($v){
            return [
                'name' => $v['name'],
                'url' => $v['url'],
                'img' => $v['img']
            ];
        },_getData($where));

        // ランダムに一個チョイス
        $data = $data[rand(0,count($data)-1)];

        // 返却
        echo json_encode([
            'state' => 'OK',
            'data' => $data
        ]);
        exit;
    } else {
        throw new Exception('Invalid Parameters');
    }
}
catch (Exception $e) {
    $message = $e->getMessage();
    $message = "エラーが発生しました ({$message})。";

    echo json_encode([
        'state' => 'fail',
        'message' => $message
    ]);
    exit;
}