<?php
 include ('resulttest.php')   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>Document</title>
     <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container text-center">
       <h4>Test De Nombre Divisible par 3 , 5 ou par ces deux nombres</h4><br>
         <?php if(!empty($message)):?>
            <div class="alert alert-success">
        <?php echo $message ?>
      </div>
    <?php endif; ?>
        <div class="form-group">
        <form action="test.php" method="post">
            <input type="number" name="number" class="form-control col-xs-8" placeholder="Enter un nombre" id="number"><br>
            <button name="submit" class="btn btn-primary btn-block" type="submit">Soumettre </button>
         </form>
        </div>
    </div>

    
</body>
</html>