<?php
include __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/gioccatoli.php';
include_once __DIR__ . '/classi/categorie.php';

$categories = [
    'gatto' => new categorie('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new categorie('Cane', '<i class="fa-solid fa-dog"></i>'),
    'pesce' => new categorie('Pesce', '<i class="fa-solid fa-fish"></i>'),
    'ucello' => new categorie('Ucello', '<i class="fa-solid fa-dove"></i>')

];

$arrayProdotti = [
    new cibo('Royal Canin', '43.99', 'https://www.amoreanimaleshop.it/wp-content/uploads/2021/05/Royal-Canin-Dog-Maxi-Puppy.jpg',  true, $categories['cane'], '545g', 'riso'),
    new cibo('Almo Nature', '44.99', 'https://m.media-amazon.com/images/I/816b2aF6jcL._AC_SL1500_.jpg', true, $categories['cane'], '500g', 'pesce'),
    new accessori('Voliera', 48, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYs4oreNMr4dJzDAtGAtQRyCO5Hyz58ueVznqBVqUUAfDGrmc45wPHgPOJOqhvXSFlVjE&usqp=CAU', true, $categories['ucello'], '100g', 'ferro')
]
?>

<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <title>titolo</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>


<body>


    <div class="w-75 mx-auto container-fluid">
        <h1>Boolshop</h1>
        <h5>I nostri prodotti</h5>

        <div class="row">


            <?php foreach ($arrayProdotti as $elem) { ?>
                <div class="card mx-3" style="width: 18rem;">
                    <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $elem->nomeProdotto ?></h5>
                        <!-- Categoria -->
                        <div>
                            <span>
                                <?php echo $elem->categoria->nome ?>
                            </span>
                            <span>
                                <?php echo $elem->categoria->icona ?>
                            </span>
                        </div>

                        <!-- Prezzo -->
                        <div>
                            <?php echo $elem->prezzo ?>
                        </div>



                        <!-- If -->
                        <?php if (get_class($elem) == 'cibo') { ?>
                            <!-- Peso -->
                            <div>
                                <?php echo $elem->peso ?>
                            </div>

                            <!-- Ingredienti -->
                            <div>
                                <?php echo $elem->ingredienti ?>
                            </div>
                        <?php } else if (get_class($elem) == 'accessori') { ?>


                            <!-- else -->
                            <!-- Peso -->
                            <div>
                                <?php echo $elem->materiale ?>
                            </div>

                            <!-- Ingredienti -->
                            <div>
                                <?php echo $elem->dimensioni ?>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            <?php } ?>





        </div>
    </div>

    <!-- Bootstap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>