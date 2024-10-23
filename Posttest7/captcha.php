<?php
session_start();

function captcha(){
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    $pass = array();
    $panjangalfa = strlen($alphabet) - 1;
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $panjangalfa);
        $pass[] = $alphabet[$n];
    }

    $code = implode($pass);
    $_SESSION['code'] = $code;

    $im = imagecreatetruecolor(100, 30);
    $bg = imagecolorallocate($im, 203, 95, 81);
    $fg = imagecolorallocate($im, 255, 255, 255);
    imagefill($im, 0, 0, $bg);
    imagestring($im, 5, 5, 5,  $code, $fg);

    header("Cache-Control: no-cache, must-revalidate");
    header('Content-type: image/png');
    imagepng($im);
    imagedestroy($im);
}
captcha();
?>