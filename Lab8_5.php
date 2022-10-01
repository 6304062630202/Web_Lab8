<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    ชื่อสมาชิก :
    <a href="detail.php?num=<?=$row["num"]?>">
        <?=$row ["name"]?>
    </a><br>
    ที่อยู่ : <?=$row ["address"]?><br>
    อีเมล์ : <?=$row ["email"]?><br>
    <img src='img/<?=$row["num"]?>.jpg' width='100'><br><hr>
<?php endwhile; ?>
</body>
</html>