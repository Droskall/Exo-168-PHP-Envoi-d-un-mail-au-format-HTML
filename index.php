<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'damienolivierdo511@gmail.com',
    'damien.olivier.do@gmail.com'
];

$suject = 'News';

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                Mes actus du jour
            </div>
        </body>
    </html>
';

mail((string)$to, $suject, $html);

if ($to === true){
    echo "ok";
}
else {
    echo "non";
}


