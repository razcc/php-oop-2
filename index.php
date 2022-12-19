<?php
    include __DIR__ . '/classi/cibo.php';

    $arrayCibo = [
        'croccantiniRoyal' => new cibo ("royalCanin", "Royal Canin", "Cane", 49.99, 545, "prosciutto, riso"),
        'croccantiniAlmo' => new cibo ("almoNature", "Almo Nature", "Cane", 44.99, 600, "manzo, cereali")

    ];
 ?>

<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <title>titolo</title>


    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>


<body>
    

    <div class="w-75 mx-auto container-fluid">
        <h1>Boolshop</h1>
        <h5>I nostri prodotti</h5>

        <div class="row">
        
            
                <?php foreach ($arrayCibo as $key => $elem) { ?>
                    <div class="col-4 border">
                        <?php   foreach($elem as $value){?>
                            <div>
                                <?php echo $value; ?> 
                            </div>
                           
                        <?php } ?>  
                    </div>    
                <?php } ?>

            

            
        </div>
    </div>

    <!-- Bootstap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>