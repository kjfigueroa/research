<html>
    <head>
        <title>Show my Name</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <p>
            The following code just show my name through othe php funtion<br>
            <code>
                Function: myName.php<br>
            </code>
        </p>
        <hr>
        <?php
            //calling the myName.php function
            include 'functions/myname.php';
        ?>
        <table>
            <tr>
                <th>Function</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>myName.php</td>
                <td><?php printname();?></td>
            </tr>
        </table>
    </body>
</html>