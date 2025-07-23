<?php
$stack = [];

while (true) {
    
    echo "モードを入力してください（1:Push, 2:Pop, 3:Peek, 4:IsEmpty）: ";
    $mode = trim(fgets(STDIN));

    
    if (!in_array($mode, ["1", "2", "3", "4"])) {
        echo "終了します。\n";
        break;
    }

    
    if ($mode === "1") {
        echo "Pushするデータを入力してください: ";
        $data = trim(fgets(STDIN));
        array_push($stack, $data);
        echo "Pushしました: $data\n";

    } elseif ($mode === "2") {
        if (empty($stack)) {
            echo "スタックが空です（Popできません）\n";
        } else {
            $popped = array_pop($stack);
            echo "Popしました: $popped\n";
        }

    } elseif ($mode === "3") {
        if (empty($stack)) {
            echo "スタックが空です（Peekできません）\n";
        } else {
            $peek = end($stack);
            echo "Peek: $peek\n";
        }

    } elseif ($mode === "4") {
        if (empty($stack)) {
            echo "empty\n";
        } else {
            echo "not empty\n";
        }
    }

    echo "---------------------------\n";
}

