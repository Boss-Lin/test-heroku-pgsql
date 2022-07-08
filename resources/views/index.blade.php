<?php $num = 10; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <input type="button" , value="test, click me" onclick="print(<?php echo $num; ?>)">
</body>

<script>
    //script可以寫在同一頁的任何地方。
    function print(num) { //在javacript的函式寫說要接一個變數，然後以彈跳式式窗alert顯示。
        alert(num); //以彈跳式式窗alert顯示。
    }

</script>

</html>
