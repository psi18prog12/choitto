<?php

function _getData($where)
{
	try {
        $gender = $where['gender'];
        $rel = $where['rel'];
        $age = $where['age'];
        $budget = $where['budget'];

		$pdo = new PDO("mysql:host=localhost;dbname=prog;charset=utf-8",'root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $stmt = $pdo->prepare('SELECT * FROM items WHERE gender = ? AND rel = ? AND (age BETWEEN ? AND ?) AND (price BETWEEN ? AND ?)');
        $stmt->bindValue(1, $gender);
        $stmt->bindValue(2, (int)$rel, PDO::PARAM_INT);
        $stmt->bindValue(3, (int)$age[0], PDO::PARAM_INT);
        $stmt->bindValue(4, (int)$age[1], PDO::PARAM_INT);
        $stmt->bindValue(5, (int)$budget[0], PDO::PARAM_INT);
        $stmt->bindValue(6, (int)$budget[1], PDO::PARAM_INT);
        $stmt->execute();
	}
	catch (PDOException $e) {
        exit($e->getMessage());
	}
}

header('Content-Type: application/json');

try {
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
       && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
    {
        // Ajaxリクエストの場合のみ処理する
        if (
            isset($_POST['gender'])
            && isset($_POST['rel'])
            && isset($_POST['age'])
            && isset($_POST['budget'])
        ){
            var_dump($_POST);die; // 今はデータ形式が異なるのでここで終了している
            $where = [
                'gender' => $_POST['gender'],
                'rel' => $_POST['rel'],
                'age' => json_decode($_POST['age'], true), // これから配列になると予想
                'budget' => json_decode($_POST['budget'], true) // これから配列になると予想
            ];
            $data = _getData($where);
            echo json_encode([
                'state' => 'OK',
                'data' => $data
            ]);
            exit;
        } else {
            throw new Exception('Invalid Parameters');
        }
    } else {
        throw new Exception('Invalid Access');
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