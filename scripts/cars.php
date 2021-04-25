<html>
    <head>
        <title>Example cars</title>
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
        $carbrand = "chevrolet";
        $carcolor = "bluegray";
        ?>
        <table>
            <tr>
                <th>brand</th>
                <th>color</th>
            </tr>
            <tr>
                <td><?php echo $carbrand;?></td>
                <td><?php echo $carcolor;?></td>
            </tr>
        </table>
    </body>
</html>
