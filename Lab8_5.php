<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<div style="display:flex">
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div style="padding: 15px; text-align: center">
    <a href="detail.php?num=<?=$row["num"]?>">
        <img src='img/<?=$row["num"]?>.jpg' width='100'>
    </a><br>
    <?=$row ["username"]?>
    </div>
<?php endwhile; ?>
</body>
</html>
