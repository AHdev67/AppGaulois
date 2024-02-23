<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b28c0a82b5.js" crossorigin="anonymous"></script>
        <title>LES GAULOIS !</title>
    </head>

    <body>
        <div id="wrapper">
            <header>
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark" aria-label="Third navbar example">
                    <div class="container-fluid">
                        <span class="navbar-brand">Les gaulois</span>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample03">
                            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="listGaulois.php">Liste des gaulois</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="listGauloisVillageSpecialites.php">Dox des gaulois</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="listVillages.php">Liste des villages</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <?= $content ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>