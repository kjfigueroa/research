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
        <table>
            <tr>
                <th>Function</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>myName.php</td>
                <td><?php 
                    //calling the myName.php function
                    require ('../functions/myName.php');
                    myName();
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>