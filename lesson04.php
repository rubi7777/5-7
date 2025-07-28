<?php
// キュー（Queue）を初期化（配列で表現）
$queue = [];

// モード選択を表示
echo "モード選択（1:Enqueue, 2:Dequeue, 3:Front, 4:IsEmpty）を入力してください: ";
$mode = trim(fgets(STDIN)); // 入力取得

// モードに応じて処理を分岐
switch ($mode) {
    case "1": // Enqueue（値を追加）
        echo "追加する値を入力してください: ";
        $value = trim(fgets(STDIN));
        array_push($queue, $value); // キューの末尾に追加
        echo "Enqueue完了：{$value}\n";
        break;

    case "2": // Dequeue（先頭の値を取り出す）
        if (empty($queue)) {
            echo "キューが空です。Dequeueできません。\n";
        } else {
            $dequeued = array_shift($queue); // 先頭から取り出す
            echo "Dequeueした値：{$dequeued}\n";
        }
        break;

    case "3": // Front（先頭の値を見る）
        if (empty($queue)) {
            echo "キューが空です。Frontできません。\n";
        } else {
            $front = $queue[0]; // 先頭の要素を表示
            echo "Frontの値：{$front}\n";
        }
        break;

    case "4": // IsEmpty（空か確認）
        if (empty($queue)) {
            echo "empty\n";
        } else {
            echo "not empty\n";
        }
        break;

    default: // それ以外の入力 → 処理終了
        echo "無効な入力です\n";
        exit;
}

// 終了
