<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil - La Cagette Sucrée</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sevillana&display=swap" rel="stylesheet">
    </head>
    <header>
        <div class="container">
                <?php require_once(__DIR__.'/header.php'); ?> 
        </div>
    </header>
    <body>
        <h2>Nos délices sucrés !</h2>
            <p>Besoin d'idées pour un évenement particulier ? Une simple envie de se faire plaisir ?</p></br>
            <p>Prenez le temps de parcourir nos actuelles réalisations gourmandes.</p>
        <div class="grid-container-photo">
                    <img class="grid-item5" src="Images/cake_citron.jpg" alt="Cake Au Citron" title="Cake Au Citron">
                    <img class="grid-item6" src="Images/citron_meringue.jpg" alt="Tarte Au Citron Meringuée" title="Tarte Au Citron Meringuée">
                    <img class="grid-item6" src="Images/meringue_rose.jpg" alt="Tarte Au Citron Meringuée" title="Tarte Au Citron Meringuée">    
                    <img class="grid-item8" src="Images/fraisier1.jpg" alt="Fraisier Citron Vert" title="Fraisier Citron Vert">
                    <img class="grid-item9" src="Images/fraisier2.jpg" alt="Fraisier Citron Vert" title="Fraisier Citron Vert">
                    <img class="grid-item10" src="Images/fromage_blanc.jpg" alt="Tarte Au Fromage Blanc" title="Tarte Au Fromage Blanc">  
                    <img class="grid-item11" src="Images/paris_brest.jpg" alt="Paris Brest" title="Paris Brest">
                    <img class="grid-item12" src="Images/saint_honore.jpg" alt="Saint-Honoré" title="Saint-Honoré">
                    <img class="grid-item12" src="Images/tarte_framboise.jpg" alt="Tarte Framboise-Pistache" title="Tarte Framboise-Pistache">
        </div>
    </body>
    <footer>
        <?php require_once(__DIR__.'/footer.php'); ?> 
    </footer>