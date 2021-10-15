<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once __DIR__ . "/db/database.php"; ?>
    <style>
        <?php include_once __DIR__ . "/css/style.css"; ?>
    </style>
    <div class="container p-5">
        <div class="row row-cols-lg-5">
                <?php foreach($dischi as $disco) {; ?>
                    <div class=" disco">
                    
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
        </div>
    </div>
    
</body>
</html>