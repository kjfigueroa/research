<?php
$fruit1= "orange";
$fruit2 = "watermellon";
?>
<html>
    <head>
        <title>Concat</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <?php
            echo "the following is the concat of: ";<br>
        ?>
        <code> fruit1 + fruit2 </code><br><hr>
        <?php
            echo "the fruits: " . $fruit1 . "and " . $fruit2;
        ?>
    </body>
</html>
