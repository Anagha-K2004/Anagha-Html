<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Electricity bill</h1>
        <form method="post" action="#">
            consumerID:<input type="number" name="id"><br><br>
            name:<input type ="text"name="name"><br><br>
            previous reading:<input type="number" name="prev"><br><br>
            present reading:<input type="number" name="pres"><br><br>
            <input type="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id=$_POST["id"];
            $name=$_POST["name"];
            $prev=$_POST["prev"];
            $pres=$_POST["pres"];
            #$rate=$_POST["rate"];
            $units=$prev-$pres;
            echo"-----------------------------";
            echo"<br><h2>Electricity Bill</h2><br>";
            echo"<br><br>";
            echo"Consumer ID:.$id<br>";
            echo"Consumer Name:.$name<br>";
            echo"units consumed:.$units<br>";
            if($units<=100){
                $amt=$units*3;
        }
        elseif($units>100&&$units<=200){
            $amt=$units*4;

        }
        elseif($units>200&&$units<=300){
            $amt=$units*5;
        }
        else{
            $amt=$units*6;
        }
        echo"<h4>Total Rs.".($amt)."</h4>";
        echo"-----------------------------";
        }
        ?>
    </body>
</html>