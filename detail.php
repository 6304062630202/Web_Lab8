<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
   $stmt = $pdo->prepare("SELECT * FROM member WHERE num = ?");
   $stmt->bindParam(1, $_GET["num"]);
   $stmt->execute(); 
   $row = $stmt->fetch();
?>
<div style="display:flex">
    <div>
        <img src='img/<?=$row["num"]?>.jpg' width='200'>
    </div>
    <div style="padding: 15px">
        ชื่อสมาชิก : <?=$row ["name"]?><br>
        ที่อยู่ : <?=$row ["address"]?><br>
        อีเมล์ : <?=$row ["email"]?><br>
    </div>
</div>
</body>
</html>