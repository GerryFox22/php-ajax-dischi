<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <?php 
        include_once __DIR__ . "/db/database.php";
        include_once __DIR__ . "/css/style.css";
    ; ?>
    
    <?php foreach($dischi as $disco) {; ?>
        <div class="disco">

            <img src="<?php echo $disco["poster"] ; ?>" alt="my image">
            

            <h1>
                <?php echo $disco["title"]; ?>
            </h1>

            <p>
                <?php echo $disco["author"]; ?>
                
            </p>

            <p>
                <?php echo $disco["year"]; ?>
                
            </p>
        </div>
        
    <?php }; ?>
</body>
</html>