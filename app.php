<!doctype html>
<html>
<head>

</head>
<body>
<?php

$age=25;

if($age>=0 && $age<=14){
    echo "Çocuksunuz.";
}
else if (15>=$age && $age<=24){
    echo "Gençsiniz.";
}
else if (25>=$age && $age<=64){
    echo "Yetişkin.";
}
else{
    echo "Yaşlısınız.";
}
?>
</body>
</html>
