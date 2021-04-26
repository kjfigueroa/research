<html>
    <head>
        <title>Types of Variables</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <p>
            The following code show the main variables in PHP:<br>
            <code>
                <li>Integers</li>
                <li>Doubles</li>
                <li>Booleans</li>
                <li>Strings</li>
                <li>Arrays</li>
                <li>Objects</li>
                <br><hr>
                &#36;intNum = 123&#59;<br>
                &#36;Double = 30.01&#59;<br>
                &#36;Boolean = true&#59;<br>
                &#36;String = Example&#59;<br>
                &#36;Array = Pineapple, Grapefruit, Tomato&#59;<br>
            </code>
        </p>
        <hr>
        <?php
            $intNum = 123;
            $doubleNum = 30.01;
            $boolean = true;
            $string = 'Example';
            $array = array("Pinneaple","Grapefruit","Tomato");
        ?>
        <table>
            <tr>
                <th>Data</th>
                <th>Value</th>
            </tr>
            <tr>
                <td><?php echo "Integer";?></td>
                <td><?php echo $intNum;?></td>
            </tr>
            <tr>
                <td><?php echo "Double";?></td>
                <td><?php echo $doubleNum;?></td>
            </tr>
            <tr>
                <td><?php echo "Boolean";?></td>
                <td><?php echo $doubleNum;?></td>
            </tr>
            <tr>
                <td><?php echo "String";?></td>
                <td><?php echo $string;?></td>
            </tr>
            <tr>
                <td><?php echo "Array";?></td>
                <td><?php echo 'var_dump($array);';?></td>
            </tr>
        </table>
    </body>
</html>