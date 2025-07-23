<?php
// スタックの初期化
$stack = [];

while (true) {
    // モード入力
    echo "モードを入力してください（1:Push, 2:Pop, 3:Peek, 4:IsEmpty）: ";
    $mode = trim(fgets(STDIN));

    // モードが1〜4かどうか判定（条件分岐の菱形）
    if (!in_array($mode, ["1", "2", "3", "4"])) {
        echo "モードが1〜4以外なので終了します。\n";
        break; // 終了処理（フローチャートの「終了」）
    }

    // 各モード処理（Push / Pop / Peek / Empty）
    switch ($mode) {
        case "1": // Push
            echo "Pushするデータを入力してください: ";
            $data = trim(fgets(STDIN));
            array_push($stack, $data);
            echo "Push完了 → [$data] がスタックに追加されました。\n";
            break;

        case "2": // Pop
            if (empty($stack)) {
                echo "スタックが空のため、Popできません。\n";
            } else {
                $popped = array_pop($stack);
                echo "Pop成功 → 取り出されたデータ: $popped\n";
            }
            break;

        case "3": // Peek
            if (empty($stack)) {
                echo "スタックが空のため、Peekできません。\n";
            } else {
                $peek = end($stack);
                echo "Peek成功 → 一番上のデータ: $peek\n";
            }
            break;

        case "4": // Empty確認
            if (empty($stack)) {
                echo "スタックは empty です。\n";
            } else {
                echo "スタックは not empty です。\n";
            }
            break;
    }

    // フローチャートのループ → モード入力に戻る
    echo "-----------------------------\n";
}

