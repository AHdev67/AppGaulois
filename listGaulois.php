<?php
ob_start();
?>

<main>
    <div class="container mx-auto bg-light border mt-5 py-4">
        <?php
        try{
            $mysqlClient = new PDO(
                'mysql:host=localhost;dbname=gaulois;charset=utf8',
                'root',
                ''
            );
        }

        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        $sqlQuery = 'SELECT nom_personnage
                    FROM personnage
                    ORDER BY nom_personnage';

        $gauloisStatement = $mysqlClient->prepare($sqlQuery);
        $gauloisStatement->execute();
        $gaulois = $gauloisStatement->fetchAll();

        echo "<table class='table'>",
                    "<thead>",
                        "<tr>",
                            "<th scope='col'>Les gaulois (de Gaule)</th>",
                        "</tr>",
                    "</thead>",

                    "<tbody>";

        foreach ($gaulois as $perso){
            echo "<tr>",
                    "<td>".$perso['nom_personnage']."</td>",
                "</tr>";
        }

        echo "<tbody>";
        ?>
    </div>
</main>

<?php
    $content = ob_get_clean();
    require_once "template.php";
?>