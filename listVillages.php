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

        $sqlQuery = 'SELECT nom_lieu, COUNT(personnage.id_personnage) AS nb_habitants
                    FROM lieu
                    INNER JOIN personnage ON lieu.id_lieu = personnage.id_lieu
                    GROUP BY lieu.id_lieu
                    ORDER BY nb_habitants DESC';

        $gauloisStatement = $mysqlClient->prepare($sqlQuery);
        $gauloisStatement->execute();
        $gaulois = $gauloisStatement->fetchAll();

        echo "<table class='table'>",
                    "<thead>",
                        "<tr>",
                            "<th scope='col'>Ville/Village</th>",
                            "<th scope='col'>Habitants</th>",
                        "</tr>",
                    "</thead>",

                    "<tbody>";

        foreach ($gaulois as $perso){
            echo "<tr>",
                    "<td>".$perso['nom_lieu']."</td>",
                    "<td>".$perso['nb_habitants']."</td>",
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