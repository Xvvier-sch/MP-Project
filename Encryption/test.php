<?php
$str="test,qwert";
printf($str);
echo "<br>";
echo "<br>";
caesarCipherBF($str);


function caesarCipherBF($str){
    global $forward;
    global $backwards;
    $output = [];
    $output1 = [];
    for ($amount = 1; $amount < 26; $amount++) {
        //Caesar Cipher - Shift Forwards
        for ($i = 0; $i < strlen($str); $i++) {
            $c = $str[$i];
            if (preg_match("/[a-z]/i", $c)) {
                $code = ord($str[$i]);
                if ($code >= 65 && $code <= 90) {
                    $c = chr((($code - 65 + $amount) % 26) + 65);
                } elseif ($code >= 97 && $code <= 122) {
                    $c = chr((($code - 97 + $amount) % 26) + 97);
                }
            }
            $output[]=$c;
        }
        $forward=implode('', $output);
        unset($output);
        $output1["foward $amount"]=$forward ;
    }
    print_r($output1);
}

?>