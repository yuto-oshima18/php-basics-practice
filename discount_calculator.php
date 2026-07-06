<?php
//課題1: 割引計算プログラム
echo "課題1: 割引計算プログラム======================<br>";
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "元の価格: " . $original_price . "<br>";
echo "割引率: " . $discount_rate * 100 . "%<br>";
echo "<strong>割引後の価格: " . $final_price . "</strong><br>";



echo "課題2: 偶数・奇数判定プログラム======================<br>";
//課題2: 偶数・奇数判定プログラム
$number = 3;

if ($number % 2 == 0) {
    echo "{$number}は偶数です<br>";
} else {
    echo "{$number}は奇数です<br>";
}

echo "課題3: 複数条件の判定======================<br>";
//課題3: 複数条件の判定
$age = 20;
$is_member = true;
$is_student = true;

// 条件1: 18歳以上かつ会員
if (($age >= 18) && ($is_member)) {
    echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生
if (($age >= 65) || ($is_student)) {
    echo "シニア・学生割引が適用されます<br>";
}

echo "課題4: 複合代入演算子の練習======================<br>";
//課題4: 複合代入演算子の練習
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50;  // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30;  // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2;   // 2倍アイテム
echo "最終スコア: {$score}点<br>";

