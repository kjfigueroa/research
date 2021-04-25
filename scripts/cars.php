<html>
    <head>
        <title>Example cars</title>
        <style>
            body{
                font-family: arial, sans-serif;
            }
			table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 30%;
			}
			td, th{
				border: 1px solid #ccc;
				text-align: left;
				padding: 8px;
			}
		</style>
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
