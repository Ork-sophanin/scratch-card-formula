<?php

$win = 0;
$lose = 0;
$my_number = 6;
$tickets = 10;
$match_number = 1;
$scratch_card_max_number = 50;
$prize_levels  = array(1 => '5000', '100', '50', '20', '10', '5', '2', '1', '0.5');

for ($i = 1; $i <= $tickets; $i++) {
    $scratch_card_numbers = array_merge($r = range(1, $scratch_card_max_number), $r, $r);
    $verification_number = $scratch_card_numbers;

    shuffle($scratch_card_numbers);
    shuffle($verification_number);

    $result = array_slice($scratch_card_numbers, 0, $my_number);
    $verification_number = array_splice($verification_number, 0, $match_number);

    $win_number = array_intersect($verification_number, $result);

    if (count($win_number)) {
        echo "| Verification Number: " . join(" ", $verification_number) . "\n";
        echo "| You Win! \n";
        echo "| My Number: " . join(" ", $result);
        $win++;
    } else {
        echo "| Verification Number: " . join(" ", $verification_number) . "\n";
        echo "| You Lose! \n";
        echo "| Your number: " . join(" ", $result);
        $lose++;
    }
    echo "\n-------------------------------------\n";
}

echo "win: " . $win;
echo " lose: " . $lose;
