<?php

header("Content-Type:text/html;charset=utf-8");
$id = $_REQUEST['id'];
$name_str="李四";
$keshi_str="皮肤科";
$date_str="2018.3.12";

if(isset($id)&&isset($name_str)&&isset($keshi_str)&&isset($date_str)){
    $im = imagecreatefrompng("img/yyk_bg.png");
    $white = imagecolorallocate($im,255,255,255);
    imagecolortransparent($im,$white);  //imagecolortransparent() 设置具体某种颜色为透明色，若注释
    $black = imagecolorallocate($im,253,211,146);//文字颜色
    imagettftext($im,16,0,100,250,$black,"img/msyh.ttf",$name_str);//写入姓名
    imagettftext($im,16,0,135,300,$black,"img/msyh.ttf",$keshi_str);//写入科室
    imagettftext($im,16,0,135,352,$black,"img/msyh.ttf",$date_str);//写入时间
    header("Content-type:image/png");
    $url="www.baidu.com";//二维码跳转的地址
    $code_url="http://qr.liantu.com/api.php?bg=f3f3f3&fg=ff0000&gc=222222&el=l&w=128&m=0&text=".urlencode($url);//获取二维码图片地址
    $code = imagecreatefrompng($code_url);//获取二维码图片资源
    imagecopymerge($im, $code, 250, 237, 0, 0, 128, 125, 100);//合成二维码
    imagepng($im);//输出图片
}else{
    $im1 = imagecreatefrompng("img/yyk_bg.png");
    header("Content-type:image/png");
    imagepng($im1);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>武汉友好医院</title>
</head>
<body>
    
</body>
</html>