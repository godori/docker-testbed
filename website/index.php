<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    ice-cream list
    <?php
        $json = file_get_contents('http://godori-service/product');
        $obj = json_decode($json);
        $items = $obj->items;
        foreach ($items as $item) {
            echo "<li>$item</li>";
        }
    ?>
    </ul>
</body>
</html>