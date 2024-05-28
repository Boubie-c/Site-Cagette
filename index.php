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
    <body>
        <header>
            <div class="container">
                <?php require_once(__DIR__.'/Header.php'); ?> 
            </div>
        </header>
    <main>
        <section>
            <h2>Bienvenue dans un monde sucré</h2>
                <p>Plongez dans un univers de délices où les saveurs exquises et les créations originales vous transportent dans un tourbillon de plaisir sucré. 
                    Ici, chaque bouchée est une promesse de bonheur, <br/>
                    <strong>ravivant de gourmands souvenirs à savourer.</strong></p>
            <h3>Des délices pour tous les instants de la vie</h3>
                <p>Que ce soit pour célébrer une occasion spéciale, 
                égayer une journée ordinaire ou simplement s'offrir un moment de gourmandise, 
                chaque douceur saura combler toutes vos envies.</p>
            <h4>Une envie gourmande ? Il suffit de demander !</h4>
                <p>À La Cagette Sucrée, chaque douceur est créée sur demande, faîte sur-mesure.<br/>
                Tenté par le voyage ? 
                N'hésitez-pas à nous contacteren remplissant ce <span class="formulaire"><a href="Contactez-nous.php">formulaire</a></span>. Vous serez recontacté dans les plus bref délais !
            </p>
        </section>
        <section>
            <h5>Nos réalisations</h5>
                <div class="grid-container">
                    <img class="grid-item1" src="Images/gateau1.jpg" alt="Gateau_chocolat" title="Gâteau au chocolat">
                    <img class="grid-item2" src="Images/gateau2.jpg" alt="Cupcake_chocolat" title="Cupcake au chocolat">  
                    <img class="grid-item3" src="Images/gateau3.jpg" alt="Birthday_cake" title="Gateau d'anniversaire">
                    <img class="grid-item4" src="Images/gateau4.jpg" alt="Gateau_cookie_fraise" title="Gâteau assorti">
                </div>
        </section>
    </main>
    <footer>
            <?php require_once(__DIR__.'/Footer.php'); ?> 
    </footer>
</body>
</html>