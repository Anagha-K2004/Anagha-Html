<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" CONTENT="width=device-width, initial-scale=1.0">
            <title>Hello World</title>
    </head>
    <body><center><h3>
        <?php
        $cricket=array("virat","dhoni","sachin","sehwag");
        echo"<br>Displaying names in table format</br>";
        echo"<br>=============================<br/>";
        echo"<br>Names of cricket players sorted in an array<br/>";
        print_r($cricket);
        echo"<br>Names of cricket players sorted in a table:<br/>";
        echo"<br><table border=4><tr><th>Player Names</th></tr>";
        echo"<tr><td>$cricket[0]</td></tr>";
        echo"<tr><td>$cricket[1]</td></tr>";    
        echo"<tr><td>$cricket[2]</td></tr>";
        echo"<tr><td>$cricket[3]</td></tr>";
        echo"</table>";
        ?>
        </h3></center>
    </body>
</html>