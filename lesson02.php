<?php
// スタックを初期化（空の配列）
$stack = [];

// モード選択を促す
echo "モード選択（1:Push, 2:Pop, 3:Peek, 4:IsEmpty）を入力してください: ";
$mode = trim(fgets(STDIN)); // 入力取得＆空白除去

// モードに応じた処理
switch ($mode) {
    case "1": // Push（値を追加）
        echo "追加する値を入力してください: ";
        $value = trim(fgets(STDIN));
        array_push($stack, $value); // スタックに追加
        echo "Push完了：{$value}\n";
        break;

    case "2": // Pop（最後の値を取り出す）
        if (empty($stack)) {
            echo "スタックが空です。Popできません。\n";
        } else {
            $popped = array_pop($stack);
            echo "Popした値：{$popped}\n";
        }
        break;

    case "3": // Peek（最後の値を確認）
        if (empty($stack)) {
            echo "スタックが空です。Peekできません。\n";
        } else {
            $top = end($stack); // 最後の値を取得（削除しない）
            echo "Peekした値：{$top}\n";
        }
        break;

    case "4": // IsEmpty（スタックが空か確認）
        if (empty($stack)) {
            echo "empty\n";
        } else {
            echo "not empty\n";
        }
        break;

    default: // 無効な入力 → 処理終了
        echo "無効な入力です\n";
        exit;
}

// 終了
