<html>
    <head>
        <title>Sending Mail Function</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <p>
            The following code just send a mail to:<br>
            <code>
            kevin.jessid@gmail.com<br>
            kevinfm.job@gmail.com<br>
            megamankevin7@gmail.com<br>
            taniajessid@gmail.com<br>
            judith2719@hotmail.com<br>
            </code>
        </p>
        <hr>
        <table>
            <tr>
                <th>Response</th>
            </tr>
            <tr>
                <td><?php 
                    //calling the sendMail.php function
                    include ('functions/sendMail.php');
                    sendMail();
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>