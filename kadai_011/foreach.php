<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $goods=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

        foreach($goods as $key=>$onion){
            echo "{$key}:{$onion}<br>";
        }
        ?>
    </p>
</body>
</html>