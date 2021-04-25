<html>
    <head>
        <title>Concat</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <p>
            The following code show the below variables:<br>
            <code>
                carbrand = chevrolet<br>
                carcolor = bluegray
            </code>
        </p>
        <hr>
        <?php
            $fruit1= "orange";
            $fruit2 = "watermellon";
            echo "the following is the concat of: ";<br>
        ?>
        <code> fruit1 + fruit2 </code><br><hr>
        <?php
            echo "the fruits: " . $fruit1 . "and " . $fruit2;
        ?>
    </body>
</html>