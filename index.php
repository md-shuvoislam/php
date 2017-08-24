<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>condition</title>
</head>
<body>
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    
    <?php 
    
        $result = $_POST ['name'] ;
    
        if($result >= 0 && $result <= 32){
            echo "<h1 style='color:red;font-size:50px;'>you are fail</h1>";
        }
        elseif($result >= 33 && $result <= 39){
            echo "<h1 style='color:yellow;font-size:50px;'>you are passed</h1>";
        }
        elseif($result >= 40 && $result <= 49){
            echo "<h1 style='color:green;font-size:50px;'>your subject cgpa C</h1>";
        }
        elseif($result >= 50 && $result <= 59){
            echo "<h1 style='color:green;font-size:50px;'>your subject cgpa B</h1>";
        }
        elseif($result >= 60 && $result <= 69){
            echo "<h1 style='color:green;font-size:50px;'>your subject cgpa A-</h1>";
        }
        elseif($result >= 70 && $result <= 79){
            echo "<h1 style='color:green;font-size:50px;'>your subject cgpa A</h1>";
        }
        elseif($result >= 80 && $result <= 100){
            echo "<h1 style='color:green;font-size:50px;'>your subject cgpa A+</h1>";
        }
        else{
            echo "<h1 style='color:green;font-size:50px;'>Undifined your result</h1>";
        }
    ?>
    
    <hr>
    
    
    <form action="" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit here">
    </form>
    
</body>
</html>