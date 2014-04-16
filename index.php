<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php



$data = json_decode(file_get_contents('http://us.battle.net/api/d3/profile/StinkFinger-1338/'));

echo "<pre>";
print_r($data->heroes[0]);
echo "</pre>";
?>

</body>
</html>