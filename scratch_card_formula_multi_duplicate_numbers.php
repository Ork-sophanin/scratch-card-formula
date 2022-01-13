<?php

$win = 0;
$lose = 0;
$tickets = 10;
$my_numbers = 6;
$match_number = 3;
$scratch_card_max_number = 9;
$prize_levels  = array(1 => '5000', '100', '50', '20', '10', '5', '2', '1', '0.5');

for ($i = 1; $i <= $tickets; $i++) {
    $scratch_card_numbers = array_merge($r = range(1, $scratch_card_max_number), $r, $r);

    shuffle($scratch_card_numbers);

    $result = array_slice($scratch_card_numbers, 0, $my_numbers);
    $win_number = array_search($match_number, array_count_values($result));

    if ($win_number) {
        echo "| Win Number: (" . $win_number . " x " . $match_number . ")\n";
        echo "| Your Number: " . join(" ", $result) . "\n";
        echo "| You Win! Prize: " . $prize_levels[$win_number] . "$";
        $win++;
    } else {
        echo "| Your Number: " . join(" ", $result) . "\n";
        echo "| You Lose";
        $lose++;
    }
    echo "\n-----------------------\n";
}

echo "Win: " . $win;
echo " Lose: " . $lose;
