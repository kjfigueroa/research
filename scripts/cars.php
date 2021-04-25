<html>
    <head>
        <title>Example cars</title>
    </head>
    <body>
        <p>
            The following code show the below variables:
            <code>
                carbrand = chevrolet
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
                <td>brand</td>
                <td>color</td>
            </tr>
            <tr>
                <td><?php echo $carbrand;?></td>
                <td><?php echo $carcolor;?></td>
            </tr>
        </table>
    </body>
</html>
