<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" CONTENT="width=device-width, initial-scale=1.0">
            <title>Student Details</title>
    </head>
    <body><center><h3>
        <?php
        $name=array("Anagha","Gayathri","Angel","Sweety");
        $mark=array(90,85,78,88);
        echo"<br>Displaying Exam Details in table format</br>";
        echo"<br>=============================<br/>";
        echo"<br>Names of Student sorted in an array<br/>";
        print_r($name);
        echo"<br>Marks of Student sorted in an array<br/>";
        print_r($mark);
        echo"<br>Marks of Student sorted in a table:<br/>";
        echo"<br><table border=4><tr><th>Name</th><th>Mark</th></tr>";
        echo"<tr><td>$name[0]</td><td>$mark[0]</td></tr>";
        echo"<tr><td>$name[1]</td><td>$mark[1]</td></tr>";    
        echo"<tr><td>$name[2]</td><td>$mark[2]</td></tr>";
        echo"<tr><td>$name[3]</td><td>$mark[3]</td></tr>";
        echo"</table>";
        ?>
        </h3></center>
    </body>
</html>