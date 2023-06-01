<?php
function lang(){
    $lang = '';
    if (Yii::$app->language == 'uz')
        $lang = '_uz';
    if (Yii::$app->language == 'ru')
        $lang = '_ru';
    elseif (Yii::$app->language == 'en')
        $lang = '_en';
    return $lang;
}
function generateByMicrotime() {
    $microtime = microtime(true);
    $microtime = str_replace('.', '', $microtime);

    return (substr($microtime, 0, 14));
}

function num2str_uz($number)
{

    $hyphen = '-';
    $conjunction = ' and ';
    $separator = ', ';
    $negative = 'negative ';
    $decimal = ' point ';
    $dictionary = array(
        0 => 'nol',
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'to\'rt',
        5 => 'besh',
        6 => 'oltti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'to\'qqiz',
        10 => 'o\'n',
        11 => 'o\'n bir',
        12 => 'o\'n ikki',
        13 => 'o\'n uch',
        14 => 'o\'n to\'rt',
        15 => 'o\'n besh',
        16 => 'o\'n oltti',
        17 => 'o\'n yetti',
        18 => 'o\'n sakkiz',
        19 => 'o\'n to\'qqiz',
        20 => 'yigirma',
        30 => 'o\'ttiz',
        40 => 'qirq',
        50 => 'ellik',
        60 => 'oltmish',
        70 => 'yetmish',
        80 => 'sakson',
        90 => 'to\'qson',
        100 => 'yuz',
        1000 => 'ming',
        1000000 => 'million',
        1000000000 => 'miliard',
        1000000000000 => 'trillion',
        1000000000000000 => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . num2str_en(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens = ((int)($number / 10)) * 10;
            $units = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . num2str_uz($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int)($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = num2str_uz($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= num2str_uz($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string)$fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}