<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center ;">WebboardPiyapron</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?>
<br>
<?php
    IF ($_GET['id']%2==0){
        echo "เป็นกระทู้หมายเลขคู่";
    }
    else
    {echo "เป็นกระทู้หมายเลขคี่";
    }
    ?>
    <br>
<br>
        <table style="border: 2px solid black; width:40%" align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="" align ="center" id="" cols="100" rows="20"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ" ></td></tr>
    </table>
    <br>
    <br>
    <div 
        align="center">
         <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>